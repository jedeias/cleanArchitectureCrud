# Simple CRUD using PHP 7.4.19 and MySQL 5.7.33

This is a simple CRUD (Create, Read, Update, Delete) project developed in PHP 7.4.19 and MySQL 5.7.33. The purpose of this project is to demonstrate the implementation of important software development concepts, including Clean Architecture, MVC (Model-View-Controller), SOLID, and Mobile First.

## Technologies Used

- PHP 7.4.19
- MySQL 5.7.33

## Features

- Create: Creating new records in the database.
- Read: Reading and displaying stored records.
- Update: Updating existing records.
- Delete: Deleting records from the database.

## Applied Concepts

### Clean Architecture

The application follows the principles of Clean Architecture, which emphasizes the separation of responsibilities into different layers, such as domain entities, use cases, adapters, and interfaces.

### MVC (Model-View-Controller)

The MVC structure is used to organize the code into different layers: the Model, which represents the business logic and data, the View, which handles the user interface, and the Controller, which manages requests and actions.

### SOLID

The SOLID principles (Single Responsibility, Open-Closed, Liskov Substitution, Interface Segregation, and Dependency Inversion) are applied to promote clean, flexible, and maintainable code.

### Mobile First

The project follows the Mobile First approach in design, prioritizing the user experience on mobile devices, ensuring that the application is responsive and adapted to different screen sizes.

## How to Run the Project

```bash
git clone https://github.com/jedeias/cleanArchitectureCrud
```

1. Clone this repository to your local environment.
2. Set up a web server (such as Apache) and a MySQL database.
3. Import the provided SQL file in the `database` directory to create the database structure.
4. Configure the database connection information in the `config.php` file.
5. Open the project in your browser and start using the CRUD functionalities.

## Contribution

Contributions to improve this project are welcome. Feel free to fork this repository, implement your improvements, and submit a pull request.
