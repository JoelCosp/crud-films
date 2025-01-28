import { bootstrapApplication } from '@angular/platform-browser';
import { appConfig } from './app/app.config'; // Asegúrate de crear este archivo de configuración
import { AppComponent } from './app/app.component';

bootstrapApplication(AppComponent, appConfig); // Llamamos con la configuración completa
