<?php
/**
 * Display all errors when APPLICATION_ENV is development.
 */

$env = getenv('APPLICATION_ENV') ?: 'production';

$modules = array(
    'Application',
    'Album',
);
if ($env == 'development') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $modules[] = 'ZendDeveloperTools';
}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
include 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
