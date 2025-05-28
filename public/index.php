<?php
require_once 'vendor/autoload.php';
require('src/views/dashboard.php');
use Application\Controllers\AbonnementController;

try {
    
    if (!isset($_GET['action']) || $_GET['action'] === '') {
        throw new Exception('Aucune action spécifiée');
    }
    
    $controller = new AbonnementController();

    switch ($_GET['action']) {
        case 'fecthListAbonnements':
            $controller->redirectToAbonnementListView();
            break;

        case 'deleteAbonnement':
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                throw new Exception('Aucun identifiant');
            }
            $identifier = (int)$_GET['id'];

            break;

        default:
            throw new Exception('Action non reconnue');
    }
} catch (Exception $e) {
    return 500;
}