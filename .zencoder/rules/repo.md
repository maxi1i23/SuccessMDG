---
description: Repository Information Overview
alwaysApply: true
---

# SuccessMDG Information

## Summary
SuccessMDG is a Laravel-based web application that appears to be a business website with presentation, team, testimonials, and service management features. It uses Filament for admin panel functionality and includes various content management capabilities.

## Structure
- **app/**: Contains application code including models, controllers, and Filament resources
- **resources/**: Frontend assets (CSS, JavaScript) and Blade views
- **routes/**: Application routes including web and client routes
- **config/**: Configuration files for Laravel and packages
- **database/**: Database migrations, seeders, and factories
- **public/**: Publicly accessible files
- **tests/**: PHPUnit test files

## Language & Runtime
**Language**: PHP
**Version**: ^8.2 (as specified in composer.json)
**Framework**: Laravel 12.x
**Admin Panel**: Filament 4.0
**Frontend**: TailwindCSS 3.4.x, Vite 7.0.x

## Dependencies
**Main Dependencies**:
- laravel/framework: ^12.0
- filament/filament: 4.0
- blade-ui-kit/blade-heroicons: ^2.6
- laravel/tinker: ^2.10.1
- flowbite: ^3.1.2 (JavaScript)

**Development Dependencies**:
- laravel/pint: ^1.24 (PHP code style fixer)
- phpunit/phpunit: ^11.5.3
- laravel/sail: ^1.41
- vite: ^7.0.4
- tailwindcss: ^3.4.17
- postcss: ^8.5.6

## Build & Installation
```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Build frontend assets
npm run build

# Development mode
composer run dev
# or
npm run dev
```

## Testing
**Framework**: PHPUnit
**Test Location**: tests/ directory with Feature and Unit subdirectories
**Configuration**: phpunit.xml in root directory
**Run Command**:
```bash
composer test
# or
php artisan test
```

## Main Components
- **Filament Admin Panel**: Admin interface for managing content
- **Models**: User, Temoignages, SousService, Service, Projet, etc.
- **Resources**: Filament resources for CRUD operations on models
- **Widgets**: Dashboard widgets for statistics and content display