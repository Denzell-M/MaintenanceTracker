# MaintenanceTracker

MaintenanceTracker is a Laravel application for tracking vehicle maintenance. The project is focused on storing vehicle information, maintenance records, shops, and related documentation in a database-backed interface.

## Tech stack

- PHP 8.2+
- Laravel 12
- pnpm
- PHPUnit
- Tailwind CSS
- SQLite for development
- MySQL for production

## Current project focus

- Vehicles
- Maintenance records
- Shops
- Documentation

## Current database schema

The project currently includes migrations for:

- `vehicles`
- `maintenance_records`
- `shops`
- `documentations`

## Local setup

1. Install PHP dependencies:

   ```bash
   composer install
   ```

2. Install frontend dependencies:

   ```bash
   pnpm install
   ```

3. Create your environment file:

   ```bash
   cp .env.example .env
   ```

4. Generate an application key:

   ```bash
   php artisan key:generate
   ```

5. Create the SQLite database file if you are using SQLite locally:

   ```bash
   touch database/database.sqlite
   ```

6. Run migrations:

   ```bash
   php artisan migrate
   ```

7. Start the app:

   ```bash
   php artisan serve
   pnpm dev
   ```

## Testing

Run the test suite with:

```bash
php artisan test
```

## Notes

- The project is still in early development.
- Keep changes aligned with the existing Laravel stack and database schema.
- Use the simplest solution that fits the current task.
