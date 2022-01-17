# prueba_konecta

1. Instalar composer

https://getcomposer.org/

2. clonar proyecto 

git clone

3. ejecutamos el siguiente comando para instalar las dependencias

composer install

4. revisamos el archivo .env que tenga correctamente las credenciales (usuario y contraseña)y creamos una base de datos con el nombre inventory directamente con el administrador de base de datos.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory
DB_USERNAME=root
DB_PASSWORD=

5. ejecutamos la migraciones que nos creara las tablas

php artisan migrate
