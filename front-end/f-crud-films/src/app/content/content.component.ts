import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { ApiService } from '../api.service';

const GLOBAL_MATERIALS = [CommonModule, HttpClient];

@Component({
  selector: 'app-content',
  imports: [CommonModule],
  templateUrl: './content.component.html',
  styleUrl: './content.component.css'
})
export class ContentComponent {
  items: any[] = [];  // Para almacenar los elementos que devuelve la API
  item: any;  // Para almacenar un solo elemento
  newItem: any = {};  // Objeto para crear o actualizar un elemento

  constructor(private apiService: ApiService) { }

  ngOnInit(): void {
    // Aquí llamamos al servicio para obtener todos los elementos
    this.apiService.getItems().subscribe(response => {
      this.items = response;  // Guardamos los elementos en la propiedad 'items' para que se muestren en la vista
    });
  }

  // Método para crear un nuevo elemento
  createNewItem(): void {
    this.apiService.createItem(this.newItem).subscribe(response => {
      console.log('Elemento creado:', response);
      this.items.push(response);  // Agregamos el nuevo elemento a la lista
    });
  }

  // Método para actualizar un elemento
  updateItem(id: number): void {
    this.apiService.updateItem(id, this.newItem).subscribe(response => {
      console.log('Elemento actualizado:', response);
      // Actualizar el elemento en la lista con la nueva información
    });
  }

  // Método para eliminar un elemento
  deleteItem(id: number): void {
    this.apiService.deleteItem(id).subscribe(response => {
      console.log('Elemento eliminado:', response);
      this.items = this.items.filter(item => item.id !== id);  // Filtramos el elemento eliminado
    });
  }
}
