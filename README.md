# PHP test

## 1. Installation

  - create an empty database named "phptest" on your MySQL server
  - import the dbdump.sql in the "phptest" database
  - put your MySQL server credentials in the constructor of DB class
  - you can test the demo script in your shell: "php index.php"

## 2. Expectations

This simple application works, but with very old-style monolithic codebase, so do anything you want with it, to make it:

  - easier to work with
  - more maintainable

# Iscale Technical Assesment

This project refactors a simple application using OOP and SOLID principles with an MVC structure.

## Improvements

*Composer Autoloading: Leveraged Composer to automatically load classes, replacing manual inclusion with require_once statements.

*Dependency Injection: Implemented dependency injection to pass dependencies like the database connection (DB) to classes, enhancing flexibility and facilitating testing.

*MVC Architecture: Structured classes following the Model-View-Controller (MVC) pattern, promoting a clear separation of concerns for improved maintainability.

*Single Responsibility Principle: Adhered to the Single Responsibility Principle by ensuring each class is responsible for a single aspect of functionality.

*Code Readability: Enhanced code readability by using descriptive variable and method names, contributing to better comprehension and maintainability.

## How to Use

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Open `public/index.php` to see the application in action.

Explore the `src` directory for the MVC components.

## Bad Practices Resolved

*Refined Constants Handling: Replaced global constants with class constants for a more organized approach to constant management.

*Streamlined Singleton Implementation: Simplified the singleton pattern by eliminating unnecessary instantiation calls within the getInstance method.

*Enhanced Security with Configuration Files: Secured sensitive database credentials by relocating them to a dedicated configuration file (config/database.php).

*Mitigated SQL Injection Risks: Advised the adoption of prepared statements to prevent SQL injection vulnerabilities when interacting with the database.

*Eliminated Unused Variables: Removed redundant variables that were not utilized within the codebase.

*Optimized Comment Deletion Process: Improved efficiency by revising the deleteNews method to utilize SQL for deleting associated comments instead of manual iteration.

*Streamlined SQL Operations: Removed redundant SQL queries related to lastInsertId, enhancing code clarity and performance.


## Plugins Used

1. **Intelephense:**

