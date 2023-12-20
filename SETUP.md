# Open House Management Platform - Setup Guide

## Prerequisites
Before you begin, ensure you have the following installed on your system:
- [Node.js](https://nodejs.org/) (for React)
- [Composer](https://getcomposer.org/) (for Laravel)
- [MySQL](https://dev.mysql.com/) (as the database)

## Getting Started

### 1. Clone the Repository

git clone https://github.com/Me-AU/OpenHouseManagement.git

cd OpenHouseManagement


### 2. Install Dependencies

- Laravel

composer install

- React

npm install


### 3. Configure the Environment
- Copy the `.env.example` file to a new file named `.env`.
- Update the database credentials in the `.env` file.

### 4. Database Setup

- Run database migrations
php artisan migrate


### 5. Start the Development Server

php artisan serve


### 6. Access the Application
Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Additional Notes
- Customize the setup steps based on your server environment.
- For detailed instructions on Laravel and React, refer to their respective documentation.
- If you encounter any issues, check the project's [GitHub Issues](https://github.com/Me-AU/OpenHouseManagement/issues) or create a new one.

Happy coding!
