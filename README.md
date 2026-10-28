# POS

Sistema de punto de venta genérico (Laravel 8 + React 17), reutilizable para cualquier comercio.
Nació como copia de `supermercado`, sin logo, sin marca y con un color neutro.

## Requisitos

- PHP 7.3–8.1 con extensiones `pdo_mysql`, `mbstring`, `gd`
- MySQL o MariaDB
- Composer
- Node 16+ (solo para recompilar el front; `public/js` y `public/css` ya vienen compilados)

## Instalación en un servidor nuevo

```bash
git clone https://github.com/ospinosystems/POS.git
cd POS
composer install --no-dev --optimize-autoloader
cp .env.example .env
php artisan key:generate
```

Editar `.env` (base de datos, `APP_NAME`, correo) y crear la base de datos vacía. Luego:

```bash
php artisan migrate --force
php artisan config:cache
```

Las migraciones dejan datos mínimos para arrancar:

| Usuario           | Clave  | Rol             |
|-------------------|--------|-----------------|
| `admin`           | `1234` | Administrador   |
| `caja`            | `1234` | Caja            |
| `vendedor`        | `1234` | Vendedor        |
| `cajero_vendedor` | `1234` | Cajero vendedor |

Cambiar las claves al entrar. También se crean el cliente `CF` (consumidor final), la categoría
`GENERAL`, el `PROVEEDOR GENERAL` y la sucursal `MI COMERCIO` (código `POS01`). Los datos de la
empresa se editan en `/sucursal`.

## Personalizar para un comercio

- **Nombre**: `APP_NAME` en `.env` (título de la pestaña).
- **Datos fiscales y de la empresa**: pantalla `/sucursal` (salen en los reportes y tickets).
- **Color**: variables al inicio de `resources/sass/custom.css`
  (`--brand-color`, `--brand-color-hover`, `--brand-color-light`, `--brand-color-select`).
  Después de cambiarlas: `npm install --legacy-peer-deps` y `npm run production`.
- **Correos del cierre**: `POS_CORREOS_CIERRE` en `.env`.

## Cargar productos

Administración → Inventario → Gestión:

1. **Nuevo (F2)** agrega una fila editable al inicio de la tabla.
2. Completar código de barras, unidad, descripción, cantidad, base, venta, categoría y proveedor.
3. **Guardar (F1)** guarda todas las filas nuevas o editadas. Mientras haya cambios sin guardar,
   aparece además una barra fija abajo con el botón **Guardar cambios**.

## Desarrollo

```bash
npm install --legacy-peer-deps
npm run watch        # o npm run production para compilar
php artisan serve
```
