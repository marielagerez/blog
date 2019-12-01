1) Auth 
2) Agregado de metodos CRUD con Blade
3) Integracion en develop con Metodo seeder y factory.

Modo de ejecucion:

composer install
npm install
php artisan serve

---
Creacion de la autenticacion:
php artisan make:auth
php artisan migrate

Creacion de la tabla Books:
php artisan make:migration create_book_table
    --definicion de campos  
php artisan migrate

Generacion de modelo:

php artisan make:model Book -mf

Generacion del controlador:
php artisan make:controller BookController --resource

Generacion del Seed
php artisan db:seed --class=BookSeeder
