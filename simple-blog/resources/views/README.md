# SimpleBlog - Laravel Blog Application

## Overview
SimpleBlog is a Laravel-based blogging platform where users can view, search, and filter posts by title and author. It also supports adding comments to posts. The application has built-in pagination and filtering for efficient browsing.

## Features
- **Post Management**: Users can view posts, search by title, and filter by author.
- **Comment System**: Users can add comments to posts.
- **Search & Filter**: Users can search for posts by title and filter posts by author.
- **Pagination**: Posts are paginated for easy browsing.
- **CRUD Operations**: Posts can be created, updated, and deleted.

## Requirements
- PHP >= 7.3
- Composer
- MySQL or any supported database
- Laravel 8+

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/SimpleBlog.git



2 .Navigate to the project directory:
cd SimpleBlog

3.Install dependencies:
composer install

4.Set up the .env file:
cp .env.example .env

DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password

5.Generate the application key:
php artisan key:generate

6.Run the database migrations:
php artisan migrate


7.Serve the application:
php artisan serve