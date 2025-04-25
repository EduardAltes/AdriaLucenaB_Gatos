# Gatos

Una aplicación web construida sobre el framework **Laravel 11** que muestra una galería paginada de imágenes de gatos obtenidas a través de la API de [CATAAS (Cat as a Service)](https://cataas.com).

## Características

- **Galería de imágenes**: Muestra imágenes de gatos en una cuadrícula responsiva usando Tailwind CSS.
- **Paginación**: Navegación sencilla entre páginas con componentes de paginación de Tailwind.
- **Seeding de datos**: Descarga y almacena metadatos de todas las imágenes disponibles en la API de CATAAS (IDs, mimetype, tamaño, etiquetas).
- **Eloquent Models**: Modelo `CatImage` para mapear la tabla `cat_images`.
- **Migraciones y Seeders**: Configuraciones automáticas para crear la base de datos y popularla con datos.

## Tecnologías empleadas

- **PHP 8.2+**
- **Laravel 11**
- **Tailwind CSS**
- **Vite**
- **GuzzleHttp** para consumir la API de CATAAS
- **MySQL / SQLite** (configurable)

## Requisitos previos

- PHP >= 8.2
- Composer
- Node.js & NPM
- Acceso a un servidor de base de datos (MySQL, Postgres o SQLite)

## Instalación

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/EduardAltes/AdriaLucenaB_Gatos.git
   cd AdriaLucenaB_Gatos
   ```

2. Instalar dependencias de PHP:
   ```bash
   composer install
   ```

3. Copiar el archivo de entorno y configurar:
   ```bash
   cp .env.example .env
   # Ajustar credenciales de DB en .env
   ```

4. Generar clave de aplicación:
   ```bash
   php artisan key:generate
   ```

5. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Instalar dependencias de Node.js para Tailwind y Vite:
   ```bash
   npm install
   ```

7. Construir activos front-end:
   ```bash
   npm run dev
   ```

## Uso

Iniciar el servidor de desarrollo integrado de Laravel:

```bash
php artisan serve
```

Luego, acceder a `http://127.0.0.1:8000` en el navegador para ver la galería de gatos.

## Estructura del proyecto

```
├─ app/
│  ├─ Http/Controllers/CatImageController.php  # Lógica para mostrar la galería
│  └─ Models/CatImage.php                     # Modelo Eloquent
├─ database/
│  ├─ migrations/                             # Migraciones para crear tablas
│  └─ seeders/
│     ├─ CatImageSeeder.php                   # Seed de metadatos desde CATAAS
│     └─ DatabaseSeeder.php                   # Seeder principal
├─ resources/views/
│  ├─ galeria.blade.php                       # Vista de la galería
│  └─ welcome.blade.php                       # Página welcome por defecto
├─ public/                                    # Archivos públicos y assets
└─ routes/web.php                             # Ruta principal: `/` → `galeria`
```

## Contribuciones

¡Las contribuciones son bienvenidas! Para sugerir mejoras o reportar errores, abre un _issue_ o envía un _pull request_.

## Licencia

Este proyecto está bajo la licencia **MIT**. Revisa el archivo `LICENSE` para más detalles.

## Autor

- **Adria Lucena** ([GitHub](https://github.com/AdriaLucenaB))

---

© 2025 Adria Lucena. Todos los derechos reservados.

