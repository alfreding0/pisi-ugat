# App web PISI UGAT
## Tecnologias necesarias
- XAMPP XAMPP Version: 8.1.12
    - PHP 8.1.12 (cli) (built: Oct 25 2022 18:16:21) (ZTS Visual C++ 2019 x64)
    - Composer version 2.5.7 2023-05-24 15:00:39
    - MySQL  Ver 15.1 Distrib 10.4.27-MariaDB, for Win64 (AMD64)
- node v18.16.0
- npm 9.7.1

## Instalación
Para la instalación abrir la terminal de GitBash en la ubicación que se desee clonar el repositorio.
1. Clonar el repositorio
``` sh
git clone git@github.com:alfreding0/pisi-ugat.git
```
2. Ingresar a la carpeta del repositorio clonado
``` sh
cd pisi-ugat
```
3. Instalar los paquetes de dependencias con composer
``` sh
composer install
```
4. Abrir el proyecto en un editor. En este ejemplo será un rápido acceso con Visual Studio Code desde la misma terminal
``` sh
code .
```
5. Ctrl+C y Ctrl+V al archivo "**.env.example**"
6. Al nuevo archivo generado "**.env copy.example**" renombrarlo para que quede como "**.env**"
7. Dentro del archivo "**.env**" modificar los datos de conexión con la base de datos
``` env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_pisi
DB_USERNAME=root
DB_PASSWORD=
```
8. Generar la clave de la aplicación APP_KEY. Para ello debemos volver a la terminal GitBash o Abrir una terminal en el mismo Visual Studio Code
``` sh
php artisan key:generate
```
9. Instalar dependencias con npm
``` sh
npm install
```
10. Ejecutar la compilación de archivos manejados por algunas extensiones del proyecto
``` sh
npm run build
```
11. Migrar las tablas a la base de datos
``` sh
php artisan migrate
```
12. Correr la aplicación web en un servidor local
``` sh
php artisan serve
```
13. En el paso anterior se ha generado un enlace "**http://127.0.0.1:8000**" para acceder en el navegador web.
14. Para detener la ejecución, solo presionar la combinación de teclas Ctrl+C
