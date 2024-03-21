<?php

use Models\DB;
use Repositories\NewsRepository;
use Controllers\NewsController;

require_once '../vendor/autoload.php';

// Load database configuration
$config = include __DIR__ . '/../config/database.php';

// DB config
$DB = new DB($config['dsn'], $config['username'], $config['password']);

// Create a NewsRepository and inject the DB instance
$newsRepository = new NewsRepository($DB);

// Instantiate the controller with dependency injection
$newsController = new NewsController($newsRepository);

// Add routing based on query parameter
$action = $_GET['action'] ?? 'list';

// Request handler
try {
    switch ($action) {
        case 'add':
            // Type-check and sanitize input
            $title = isset($_GET['title']) ? (int)$_GET['title'] : null;
            $body = isset($_GET['body']) ? (int)$_GET['body'] : null;
            $newsController->addNews($title, $body);
            break;
        case 'list':
            $newsController->listNewsWithComments();
            break;
        // we can add more routes if needed
        default:
            // Use constants for HTTP status codes
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
            break;
    }
} catch (Exception $e) {
    // Log exceptions
    // Display error message or redirect to an error page
    error_log($e->getMessage());
    header("HTTP/1.1 500 Internal Server Error");
    echo "500 Internal Server Error";
}
