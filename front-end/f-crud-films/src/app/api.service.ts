import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  // URL base de tu API en Laravel
  private apiUrl = 'http://localhost:8000/api/films';  // Asegúrate de usar la URL de tu API

  constructor(private http: HttpClient) { }

  // Método para obtener todos los elementos (GET)
  getItems(): Observable<any> {
    return this.http.get(this.apiUrl);
  }

  // Método para obtener un solo elemento (GET)
  getItemById(id: number): Observable<any> {
    return this.http.get(`${this.apiUrl}/${id}`);
  }

  // Método para crear un nuevo elemento (POST)
  createItem(data: any): Observable<any> {
    return this.http.post(this.apiUrl, data);  // 'data' es el objeto que envías
  }

  // Método para actualizar un elemento (PUT)
  updateItem(id: number, data: any): Observable<any> {
    return this.http.put(`${this.apiUrl}/${id}`, data);  // 'data' es el objeto con la nueva info
  }

  // Método para eliminar un elemento (DELETE)
  deleteItem(id: number): Observable<any> {
    return this.http.delete(`${this.apiUrl}/${id}`);
  }
}
