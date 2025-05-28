<?php
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'CRUD_APP');
define('DB_USER', 'dossoFarah');
define('DB_PASS', 'farah');

try {
  $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  $pdo->exec("set names utf8mb4");
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

?>