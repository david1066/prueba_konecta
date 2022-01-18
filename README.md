# prueba_konecta

1. Instalar composer

https://getcomposer.org/

2. clonar proyecto 

git clone

3. ejecutamos el siguiente comando cmd para instalar las dependencias pero dentro del proyecto en la carpeta prueba 

composer install

4. revisamos el archivo .env que tenga correctamente las credenciales (usuario y contraseña)y creamos una base de datos con el nombre inventory directamente con el administrador de base de datos.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory
DB_USERNAME=root
DB_PASSWORD=

5. ejecutamos la migraciones que nos creara las tablas pero dentro del proyecto en la carpeta prueba

php artisan migrate

6. corremos el proyecto con servidor que viene en composer 

php artisan serve

7. en el navegador abrimos la ruta

http://127.0.0.1:8000
