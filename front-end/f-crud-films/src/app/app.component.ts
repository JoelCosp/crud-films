import { Component, OnInit } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { initFlowbite } from 'flowbite';
import { ContentComponent } from './content/content.component';
import { CommonModule } from '@angular/common';
import { provideHttpClient } from '@angular/common/http'; 
import { provideRouter } from '@angular/router'; 
import { routes } from './app.routes'; 

// Esta constante será solo para los componentes
const GLOBAL_MATERIALS = [RouterOutlet, ContentComponent, CommonModule];

@Component({
  selector: 'app-root',
  standalone: true, // Esto indica que este componente es standalone
  imports: [GLOBAL_MATERIALS], // Aquí solo importamos los componentes y directivas
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'f-crud-films';

  ngOnInit(): void {
    initFlowbite();
  }
}
