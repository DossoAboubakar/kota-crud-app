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
        $success = $operations->deleteItem('myclean_ville', 'id_ville', $id);
        echo json_encode(['success' => $success]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'GET':
    try {
       $id = $_GET['id'] ?? null;
       if($id){
        $success = $operations->getItemById('myclean_ville', 'id_ville', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        try {
        $ville = $_POST['ville'] ?? null;
        $success = $operations->insertNewRow('myclean_ville', ['libelle_ville'], [$ville]);
        echo json_encode(['success' => $success]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        
        break;

    case 'PUT':
        try {
            $put_vars = file_get_contents("php://input");
            parse_str($put_vars, $put_vars);
            $id = $put_vars['id'] ?? null;
            $ville = $put_vars['ville'] ?? null;
            $operations->updateRow(
                'myclean_ville', 
                ['libelle_ville'], 
                [$ville], 
                'id_ville = ?', 
                [$id]
            );
            
        echo json_encode(['success' => true]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
