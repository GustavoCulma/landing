## Para instalar el proyecto se deben seguir los siguientes pasos:  
- php --version  
- composer install  
- composer update  
- cp .env.example .env  
- php artisan key:generate  
- php artisan migrate:fresh --seed  
  Antes de ejecutar las migraciones debe crear la base de datos: landing en su gestor de bases de datos.  
  **Nota: el proyecto esta realizado en Laravel 9 , PHP 8 y Livewire**  
  
### Ejecución  
Luego de que haya instalado correctamente el proyecto este le pedirá el registro y deberá recargar la página para que muestre el ganador. Luego si quiere ver o descargar la cantidad de usuarios registrados en el sistema deberá ir al icono de login e ingresar con las siguientes credenciales:  
**user:** prueba123@gmail.com  
**password:** 12345678
