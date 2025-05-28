<?php

use Application\CrudRepository\CrudRequests;

$operations = $operations ?? new CrudRequests(); // si pas déjà instancié

switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
        $id = (int)$_GET['id'];
        $success = $operations->deleteItem('laclef_annonce', 'id_annonce', $id);
        http_response_code(response_code: 200);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(),500);
        }
        break;

    case 'GET':
        // ici tu peux ajouter un getAll ou getById
        break;

    case 'POST':
        // ici tu peux ajouter une insertion
        break;

    case 'PUT':
        // ici tu peux ajouter un update
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
