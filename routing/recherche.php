<?php

use Application\CrudRepository\CrudRequests;

$operations = $operations ?? new CrudRequests();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        if (!isset($_GET['id']) || $_GET['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_GET['id'];
        $success = $operations->deleteItem('myclean_recherche', 'id_recherche', $id);
        http_response_code(200);
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
