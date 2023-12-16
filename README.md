# Laravel Reservation System

This Laravel-based reservation system allows for the management of activities, companies, and users. The system supports four different types of users: admin, company owner, customer, and guide.

## Features

### Admin

- Manages companies, users, and activities.
- Has full control over the system.

### Company Owner

- Handles guides for their companies.
- Manages activities within their companies.
- Assigns guides to activities.

### Customer

- Views their activities.
- Cancels reservations.

### Guide

- Views assigned activities.
- Generates a PDF list of participants for an activity.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/laravel-reservation-system.git
2. Install dependencies:
   ```bash
   composer install
3. Copy the .env.example file to .env and configure the database connection:
   ```bash
   cp .env.example .env
 
4. Generate application key:
   ```bash
   php artisan key:generate

5. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed

## Usage

1. Run the development server:
   ```bash
   php artisan serve
2. Access the application in your browser at http://localhost:8000.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
   
