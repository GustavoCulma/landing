Para instalar el proyecto de deben seguir los siguientes pasos:
	php --version
	composer install
	composer update
	cp .env.example .env
	php artisan key:generate
	php artisan migrate:fresh --seed
	Antes de ejecutar las migraciones debe crear la base de datos: landing en su gestor de bases de datos
Ejecución
Luego de que haya instalado correctamente el proyecto este le pedirá el registro y deberá recargar la página para que muestre el ganador. Luego si quiere ver o descargar la cantidad de usuarios registrados en el sistema deberá ir al icono de login e ingresar con las siguientes credenciales:
	prueba123@gmail.com
	12345678
