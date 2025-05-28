<?php

use Application\Controllers\AbonnementController;
use Application\CrudRepository\CrudAbonnement;
use Application\CrudRepository\CrudRequests;

$controller = new AbonnementController();
$abonnementCrudRepository = new CrudAbonnement();
$operations = $operations ?? new CrudRequests(); // sécurité si déjà instancié ailleurs

switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $abonnementCrudRepository->deleteAbonnement($id);
            echo json_encode(['success' => $success]);
            
        } catch (\Throwable $th) {
            http_response_code(500);
            throw new Exception('Errreur de suppresion',500);
        }
       
        break;

    case 'GET':
        $response = $abonnementCrudRepository->getAbonnements();
        echo json_encode(['data' => $response]);
        break;

    case 'POST':
        // TODO: Récupérer les données POST (json ou formulaire)
        // $data = json_decode(file_get_contents('php://input'), true);
        // $success = $abonnementCrudRepository->insertNewRow(...);
        break;

    case 'PUT':
        // TODO: Gérer la mise à jour
        // $data = json_decode(file_get_contents('php://input'), true);
        // $success = $abonnementCrudRepository->updateRow(...);
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
