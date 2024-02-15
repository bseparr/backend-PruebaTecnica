## Prueba Técnica.

### Instrucciones de uso.

Para ejecutar la aplicación, después de descargar o clonar el repositorio, ejecute el siguiente comando dentro del directorio de la aplicación.

    composer install
     
Antes de continuar, se debe crear una base de datos MySQL de nombre `tecnica`, asi como tambien sera necesario crear una copia del archivo `.env.example` y renombrarlo `.env`, en el cual se colocaran las credenciales de la base de datos.

    //Ejemplo
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tecnica
    DB_USERNAME=root
    DB_PASSWORD=

Con la base de datos lista, se procedera a realizar las migraciones a esta.

    php artisan migrate:fresh

Tambien se poblaran las tablas de la base de datos con.

    php artisan db:seed

Con todo lo anterior listo se procedera a corre la aplicacón.

    php artisan serve

Generalmente se alojara en `localhost:8000`, de no ser asi la dirección saldra especificada en la consola.

## Autor

Bastian Sepulveda