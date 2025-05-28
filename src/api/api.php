<?php
header('Content-Type: application/json');

define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'CRUD_APP');
define('DB_USER', 'dossoFarah');
define('DB_PASS', 'farah');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête
    $query = "SELECT *  FROM laclef_abonnement ORDER BY id_abonnement ASC";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_NUM); // tableau de tableaux numériques
    echo json_encode(['data' => $results]);

} catch (PDOException $e) {
    echo json_encode(['error' => 'Erreur DB: ' . $e->getMessage()]);
}