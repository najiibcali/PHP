# Web Application Development — PHP & MySQL

This repository contains my learning journey and practical exercises for the **Web Application Development — PHP & MySQL** course.

The course focuses on learning PHP from the fundamentals to building dynamic, database-driven web applications using PHP and MySQL.

---

## 👨‍🎓 Student

**Name:** Abdi Najiib
**Course:** Web Application Development — PHP & MySQL
**Faculty:** Computer & Information Technology
**Instructor:** Yahye Ali Isse

---

# 📚 Course Overview

This course introduces the fundamental concepts required to build web applications using **PHP** and **MySQL**.

Throughout the course, I will learn how PHP works on the server, how to process user input, how to work with databases, and how different web technologies communicate with each other.

The course will progress from basic PHP programming to more advanced concepts such as:

* PHP Fundamentals
* Functions and Arrays
* Forms and Validation
* File Handling
* Sessions and Cookies
* MySQL and SQL
* CRUD Applications
* AJAX and JSON
* REST APIs
* Authentication and Security
* MVC Architecture
* Laravel Framework

---

# 🎯 Learning Goals

By completing this course, I aim to understand how a complete web application works from the frontend to the backend and database.

My main goals are to:

* Understand how web applications work
* Understand the client-server architecture
* Learn PHP syntax and programming fundamentals
* Work with variables and data types
* Use operators and control structures
* Work with arrays
* Create and use functions
* Organize PHP code into reusable files
* Process HTML forms using PHP
* Validate user input
* Handle errors properly
* Work with files
* Understand sessions and cookies
* Learn MySQL and SQL
* Connect PHP applications to MySQL
* Build CRUD applications
* Exchange data using JSON
* Understand AJAX communication
* Build REST APIs
* Understand authentication and authorization
* Learn basic web security
* Understand MVC architecture
* Learn the fundamentals of Laravel

---

# 🛠️ Technologies & Tools

## Backend

* PHP
* Laravel

## Database

* MySQL
* SQL

## Frontend

* HTML5
* CSS3
* JavaScript
* jQuery
* AJAX
* JSON

## Development Tools

* Visual Studio Code
* XAMPP
* phpMyAdmin
* Git
* GitHub

---

# 📖 Topics Covered

## 1. PHP Fundamentals

The first stage focuses on understanding the PHP language and its basic syntax.

Topics include:

* What is PHP?
* Server-side programming
* PHP syntax
* PHP tags
* `echo`
* `print`
* Comments
* Variables
* Constants
* Data types
* String interpolation
* String functions
* Basic input and output

### Practice

The exercises for this section are located in:

```text
01-php-fundamentals/
```

---

## 2. Operators & Control Structures

This section focuses on controlling the flow of PHP programs.

Topics include:

* Arithmetic operators
* Assignment operators
* Comparison operators
* Logical operators
* Increment and decrement
* `if`
* `if...else`
* `if...elseif...else`
* `switch`
* `match`
* `for`
* `while`
* `do...while`
* `foreach`

### Practice

```text
02-control-structures/
```

---

## 3. Arrays

Arrays are used to store multiple values in PHP.

Topics include:

* Indexed arrays
* Associative arrays
* Multidimensional arrays
* Adding and removing elements
* Accessing array elements
* Looping through arrays
* Common array functions

### Practice

```text
03-arrays/
```

---

## 4. Functions

Functions allow us to organize code into reusable blocks.

Topics include:

* Creating functions
* Calling functions
* Parameters
* Arguments
* Return values
* Default parameters
* Type declarations
* Anonymous functions
* Arrow functions

### Practice

```text
04-functions/
```

---

## 5. Include & Require

This section focuses on reusing PHP files and organizing applications.

Topics include:

* `include`
* `require`
* `include_once`
* `require_once`
* Reusable components
* Code organization

Example:

```php
require_once "config.php";
```

### Practice

```text
05-include-require/
```

---

## 6. Forms & User Input

PHP can receive and process information submitted through HTML forms.

Topics include:

* HTML forms
* `GET`
* `POST`
* Form processing
* User input
* Input validation
* Error handling
* Sanitizing input

### Practice

```text
06-forms-validation/
```

---

## 7. File Handling

This section introduces working with files using PHP.

Topics include:

* Opening files
* Reading files
* Writing files
* Appending data
* Uploading files
* File validation

### Practice

```text
07-file-handling/
```

---

## 8. Sessions & Cookies

Sessions and cookies are used to maintain information between requests.

Topics include:

* Cookies
* Sessions
* Creating sessions
* Reading session data
* Destroying sessions
* Login state
* Logout functionality

### Practice

```text
08-sessions-cookies/
```

---

# 🗄️ 9. MySQL & SQL

This section introduces relational databases and SQL.

Topics include:

* What is a database?
* What is MySQL?
* Database creation
* Tables
* Columns
* Primary keys
* Foreign keys
* Relationships
* SQL basics

### SQL Operations

```sql
SELECT
INSERT
UPDATE
DELETE
CREATE
ALTER
DROP
```

### Practice

```text
09-mysql-sql/
```

---

# 🔄 10. CRUD Applications

CRUD represents the four fundamental database operations:

| Operation | Meaning              |
| --------- | -------------------- |
| Create    | Add new data         |
| Read      | Retrieve data        |
| Update    | Modify existing data |
| Delete    | Remove data          |

I will use PHP and MySQL to build applications that perform complete CRUD operations.

### Practice

```text
10-crud/
```

---

# 🔗 11. PHP & MySQL Connection

This section focuses on connecting PHP applications with MySQL databases.

Topics include:

* Database connection
* MySQLi
* PDO
* Prepared statements
* Executing SQL queries
* Fetching database records
* Handling database errors

Example concept:

```text
PHP Application
       ↓
Database Connection
       ↓
    MySQL
       ↓
   Database
```

### Practice

```text
11-php-mysql/
```

---

# ⚡ 12. AJAX & JSON

AJAX allows web applications to communicate with the server without reloading the entire page.

Topics include:

* AJAX concepts
* JavaScript requests
* PHP responses
* JSON
* Sending data
* Receiving data
* Dynamic page updates

### Practice

```text
12-ajax-json/
```

---

# 🌐 13. REST API

This section introduces backend APIs and communication between applications.

Topics include:

* What is an API?
* REST architecture
* HTTP methods
* GET
* POST
* PUT
* DELETE
* JSON responses
* API endpoints
* Consuming APIs

Example:

```text
Client
  ↓
HTTP Request
  ↓
PHP REST API
  ↓
MySQL
  ↓
JSON Response
  ↓
Client
```

### Practice

```text
13-rest-api/
```

---

# 🔐 14. Authentication & Security

This section focuses on protecting web applications and user accounts.

Topics include:

* User registration
* Login
* Logout
* Authentication
* Authorization
* Password hashing
* Sessions
* Prepared statements
* Input validation
* SQL Injection
* XSS
* CSRF
* Secure application practices

### Practice

```text
14-authentication-security/
```

---

# 🏗️ 15. MVC Architecture

MVC is a software architecture pattern used to organize web applications.

### Model

Responsible for data and database-related operations.

### View

Responsible for displaying information to the user.

### Controller

Responsible for handling requests and coordinating between the Model and View.

```text
        User
          ↓
       Controller
       ↙        ↘
   Model         View
     ↓             ↓
  Database      Interface
```

### Practice

```text
15-mvc/
```

---

# 🚀 16. Laravel

The final stage introduces Laravel, a modern PHP framework for building web applications.

Topics include:

* Laravel installation
* Laravel project structure
* Routing
* Controllers
* Blade templates
* Forms
* Validation
* Migrations
* Models
* Eloquent ORM
* Middleware
* Authentication
* Database relationships
* REST APIs

### Practice

```text
16-laravel/
```

---

# 📂 Repository Structure

```text
PHP-MYSQL/
│
├── 01-php-fundamentals/
│   ├── index.php
│   └── README.md
│
├── 02-control-structures/
│
├── 03-arrays/
│
├── 04-functions/
│
├── 05-include-require/
│
├── 06-forms-validation/
│
├── 07-file-handling/
│
├── 08-sessions-cookies/
│
├── 09-mysql-sql/
│
├── 10-crud/
│
├── 11-php-mysql/
│
├── 12-ajax-json/
│
├── 13-rest-api/
│
├── 14-authentication-security/
│
├── 15-mvc/
│
└── 16-laravel/
```

---

# 🧪 Practical Learning

This repository is not only for theoretical notes.

Each topic will contain practical exercises and examples that demonstrate how the concept works in real PHP applications.

My learning approach is:

```text
Learn Concept
      ↓
Write Example
      ↓
Practice
      ↓
Solve Problem
      ↓
Build Feature
      ↓
Build Application
```

---

# 🎓 Final Project

At the end of the course, I will use the concepts learned throughout the course to develop a complete **PHP & MySQL web application**.

The project will demonstrate concepts such as:

* User authentication
* Database design
* CRUD operations
* Form validation
* Sessions
* Security
* Database relationships
* Responsive frontend
* PHP backend
* MySQL database

---

# 📈 Learning Progress

* [✅] PHP Environment Setup
* [✅] PHP Syntax Basics
* [✅] Output with `echo` and `print`
* [✅] Variables
* [✅] Data Types
* [✅] String Interpolation
* [ ] Operators
* [ ] Conditional Statements
* [ ] Loops
* [ ] Arrays
* [ ] Functions
* [ ] Include & Require
* [ ] Forms
* [ ] Validation
* [ ] File Handling
* [ ] Sessions & Cookies
* [ ] MySQL
* [ ] SQL
* [ ] CRUD
* [ ] PHP & MySQL Integration
* [ ] AJAX
* [ ] JSON
* [ ] REST API
* [ ] Authentication
* [ ] Security
* [ ] MVC
* [ ] Laravel
* [ ] Final Project

---

# 🎯 Course Goal

The ultimate goal of this repository is to document my progress from **learning PHP fundamentals** to developing **complete database-driven web applications**.

```text
PHP Fundamentals
       ↓
Web Forms
       ↓
MySQL & SQL
       ↓
CRUD Applications
       ↓
AJAX & JSON
       ↓
REST APIs
       ↓
Authentication & Security
       ↓
MVC
       ↓
Laravel
       ↓
Complete Web Application
```

---

## 📌 Note

This repository is continuously updated as I progress through the course.
