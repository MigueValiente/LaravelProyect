# LaravelProyect

## Esta aplicación nace con el objetivo de ayudar a jóvenes emprendedores, tanto en el ámbito económico como en el personal. Aprederán a ser independientes y a valorar el esfuerzo que se debe realizar para ganarse sus propios ahorros.

## Modelado de la base de datos
![modelado de la base de datos](resources/images/BD_LaravelProject.png)

# Guía de uso

## A continuación daré los pasos a seguir para el correcto uso de la app:

1. Descargar el proyecto del repositorio
2. Debes configurar el .env, para esto simplemente haz una copia del .env.example y modifica a tu gusto la parte de la base de datos. El nombre de la BBDD debe ser workingdb.
3. En la terminal debes situarte en la ruta donde este el proyecto, y después realizar el comando php artisan migrate:fresh --seed. Con este comando ya se habrán generado varios trabajos de ejemplo.
4. Para acceder a la app desde el navegador debes poner en la url "working.test".

# Internet Books Database 

__Internet Books Database__ es una aplicación web durante durante el curso de __Desarrollo web en Entorno Servidor__.

## Configuración del Stock

Para este proyecto se ha utilizado como entorno de desarrollo la herramienta [Laravel Valet](https://laravel.com/docs/5.8/valet) (disponible en OS X y Linux). Si usas Windows se puede recurrir a [Homestead](https://laravel.com/docs/5.8/homestead) a algún otro software de instalación del stack de desarrollo.

## Instalación del proyecto

Una vez instalado el stack de desarrollo, clonar el repositorio:

```bash
git clone https://github.com/thinway/Internet-Books-Database.git
```

Entrar el el directorio e instalar todas las dependencias del Backend:

```bash
composer install
```

Crear en el servidor __MySql__ dos bases de datos con nombres __'ibdb'__ e __'ibdb_telescope'__ (sin las comillas). Asimismo configurar un usuario (nombre y contraseña) con permisos suficiente de acceso a dichas bases de datos. 

Renombrar el archivo __.env.example__ a __.env__ cumplimentando los datos de acceso al SGBD:

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ibdb
DB_USERNAME=usuario_mysql
DB_PASSWORD=password_mysql
...
TELESCOPE_ENABLED=true
TELESCOPE_DB_CONNECTION=telescope
TELESCOPE_DB_HOST=127.0.0.1
TELESCOPE_DB_PORT=3306
TELESCOPE_DB_DATABASE=ibdb_telescope
TELESCOPE_DB_USERNAME=usuario_mysql
TELESCOPE_DB_PASSWORD=password_mysql
```

Generar la clave de cifrado:

```bash
php artisan key:generate
```

Lanzar las migraciones cargando de datos la base de datos con los sedes:

```bash
php artisan migrate --seed
```

Configurar en el __.env__ los datos de acceso a un servicio de envío de email:

```
MAIL_DRIVER=log
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

Llegados a este punto la aplicación ya debe funcionar y ser operativa desde la url [http://ibdb.test](http://ibdb.test) (si se ha utilizado __Laravel Valet__).
