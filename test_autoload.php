<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Check if the class exists
if (class_exists('Application\CrudRepository\CrudRequests')) {
    echo "CrudRequests class exists!\n";
    
    // Try to instantiate the class
    try {
        $crud = new \Application\CrudRepository\CrudRequests();
        echo "Successfully instantiated CrudRequests class!\n";
    } catch (Exception $e) {
        echo "Error instantiating CrudRequests: " . $e->getMessage() . "\n";
    }
} else {
    echo "CrudRequests class does not exist!\n";
    
    // Debug: Show include paths
    echo "Include paths: " . get_include_path() . "\n";
    
    // Debug: Check if the file exists
    $classFile = __DIR__ . '/src/Application/CrudRepository/CrudRequests.php';
    if (file_exists($classFile)) {
        echo "CrudRequests.php exists at: $classFile\n";
        echo "File contents start with: " . substr(file_get_contents($classFile), 0, 100) . "...\n";
    } else {
        echo "CrudRequests.php does not exist at: $classFile\n";
    }
    
    // Debug: Show all declared classes
    echo "\nDeclared classes:\n";
    print_r(get_declared_classes());
}
