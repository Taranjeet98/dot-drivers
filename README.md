# Dot Drivers

A Laravel-based driver management system.

## Prerequisites

Before you begin, ensure you have the following installed:
* **PHP** >= 8.2
* **Composer**
* **Node.js & NPM**
* **XAMPP** (or any MySQL database server)

## Installation Steps

Follow these steps to get your development environment set up:

### 1. Clone the repository
```bash
git clone [https://github.com/Taranjeet98/dot-drivers.git](https://github.com/Taranjeet98/dot-drivers.git)
cd dot-drivers

# Install PHP packages defined in composer.json
composer install

# Install Javascript packages defined in package.json
npm install

# Compile frontend assets (CSS/JS) using Vite
npm run build

# Create a copy of the environment template
cp .env.example .env

# Generate a unique application key for security
php artisan key:generate

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dot_drivers
DB_USERNAME=root
DB_PASSWORD=

# Run migrations to create tables in your database
php artisan migrate

# Start the local development server
php artisan serve
