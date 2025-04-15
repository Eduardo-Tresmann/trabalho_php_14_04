# CodeIgniter Project

## Overview
This project is built using the CodeIgniter framework and includes functionalities for managing Users, Suppliers, Employees, Payments, Teachers, and Classes. It utilizes migrations, entities, validation, models, and routes to provide a structured and efficient application.

## Features
- **User Management**: Create, read, update, and delete user records.
- **Supplier Management**: Handle supplier information and transactions.
- **Employee Management**: Manage employee details and records.
- **Payment Processing**: Facilitate payment transactions and records.
- **Teacher Management**: Manage teacher information and classes.
- **Class Management**: Handle class details and student enrollments.

## Project Structure
```
codeigniter-project
├── app
│   ├── Config
│   ├── Controllers
│   ├── Database
│   ├── Entities
│   ├── Models
│   └── Validation
├── public
├── writable
├── composer.json
├── .env
└── README.md
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the necessary dependencies.
4. Configure your database settings in the `.env` file.
5. Run the migrations using the command:
   ```
   php spark migrate
   ```
6. Seed the database with initial data:
   ```
   php spark db:seed DatabaseSeeder
   ```
7. Start the development server:
   ```
   php spark serve
   ```

## Usage
Access the application in your web browser at `http://localhost:8080`. You can interact with the various features through the defined routes.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for details.