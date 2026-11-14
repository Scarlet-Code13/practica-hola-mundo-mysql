# Aplicación Hola Mundo con PHP y MySQL

## Descripción
Aplicación web desarrollada en PHP que muestra un mensaje Hola Mundo y establece conexión con una base de datos MySQL utilizando Docker Compose.

## Tecnologías utilizadas
- PHP 8.3
- Apache
- MySQL 8.0
- Docker
- Docker Compose

## Estructura del proyecto
- src/: código fuente de la aplicación.
- Dockerfile: configuración del servidor PHP y Apache.
- docker-compose.yml: configuración de los servicios web y MySQL.

## Ejecución
Para iniciar los servicios, ejecutar:

docker compose up -d --build

## Acceso
Abrir en el navegador:

http://localhost:8081

## Base de datos
Nombre: holamundo

La aplicación crea automáticamente una tabla de visitas y registra cada acceso.