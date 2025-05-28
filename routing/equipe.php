<?php

use Application\CrudRepository\CrudRequests;

$operations = $operations ?? new CrudRequests(); // si pas déjà instancié

switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        if (!isset($_GET['id']) || $_GET['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_GET['id'];
        $success = $operations->deleteItem('laclef_equipe', 'id_equipe', $id);
        echo json_encode(['success' => $success]);
        break;

    case 'GET':
        // ici tu peux ajouter un getAll ou getById
        // ex: echo json_encode(['data' => $operations->getAll('laclef_equipe')]);
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
