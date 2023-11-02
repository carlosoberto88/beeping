cat ~/.ssh/id_rsa.pub | clip
# Proyecto Laravel 8 y Livewire

Este proyecto utiliza Laravel 8 y Livewire para manejar un sistema de gestión de órdenes y productos.

## Configuración del entorno

Antes de empezar, asegúrese de tener instalado PHP 7.4, Composer y una base de datos que Laravel soporte (MySQL, Postgres, SQLite, SQL Server).

### Instalación

1. Clonar el repositorio y cambiar al directorio de trabajo:

```bash
gh repo clone carlosoberto88/beeping
cd beeping
```

2. Instalar las dependencias de PHP con Composer:

```bash
composer install
```

3. Copiar `.env.example` a `.env` y configurar las variables de entorno:

```bash
cp .env.example .env
```

4. Generar la clave de la aplicación:

```bash
php artisan key:generate
```

### Configuración de la Base de Datos

Actualizar las siguientes variables en el archivo `.env` para que coincidan con tu configuración de la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### Migraciones y Seeders

Ejecutar las migraciones y los seeders para establecer la base de datos y llenarla con datos de prueba:

```bash
php artisan migrate --seed
```

### Ejecutar la aplicación

Para iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`.

### Colas de Trabajo

Para procesar los trabajos en la cola:

```bash
php artisan queue:work
```

Asegúrate de haber configurado la conexión de cola en `.env` a `database` o la configuración que desees utilizar.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT.
