# ecommerce-website-
Our ecommerce site merges PHP for server-side logic with HTML, JavaScript,CSS for dynamic frontends. It's responsive for all devices. MySQL securely stores products, user profiles, transactions. Users browse, add to cart, checkout seamlessly with JavaScript. Admin tools manage products, track orders for a smooth experience and efficient operations.
# Database Setup for E-Commerce Website
To create and manage the database for the e-commerce website, follow these steps:

Prerequisites : 
Install the following tools in Visual Studio Code for database management and connection:

MySQL: Extension to manage MySQL databases.
SQL Database Projects: Helps in creating and maintaining SQL database schemas.
Database Client (JDBC): Provides a graphical interface to connect and query databases.
SQLTools: A lightweight extension to execute SQL queries and manage database connections.
Install XAMPP to set up a local web server and MySQL database environment.

# Steps to Create the Database
Launch XAMPP and start the Apache and MySQL modules.
Open phpMyAdmin in your browser using http://localhost/phpmyadmin.
Create a new database for the e-commerce website.
Define the necessary tables and relationships to support the website's functionality, such as:
Users: Stores user details like name, email, and passwords.
Products: Contains product information like name, price, description, and stock quantity.
Orders: Tracks user orders with status and timestamps.
Payments: Records payment details and statuses.
Categories: Organizes products into categories.
Connecting the Database to Visual Studio Code
Install the SQLTools extension in Visual Studio Code.
Configure a new connection:
Driver: MySQL
Host: localhost
Port: 3306 (default MySQL port)
User: root (or the username you set for your database)
Password: Leave blank (if no password is set) or provide the correct password.
Database: Name of your e-commerce database (e.g., ecommerce_db).
Save the connection and test it to ensure successful access to the database.
