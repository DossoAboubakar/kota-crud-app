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
        $success = $operations->deleteItem('myclean_commune', 'id_commune', $id);
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
        $success = $operations->getItemById('myclean_commune', 'id_commune', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        try {
        $libelle_commune = $_POST['libelle_commune'] ?? null;
        $id_ville = $_POST['id_ville'] ?? null; 
        $longitude = $_POST['longitude'] ?? '123';
        $latitude = $_POST['latitude'] ?? '123';
        $success = $operations->insertNewRow('myclean_commune', ['libelle_commune', 'id_ville', 'long', 'lat'], [$libelle_commune, $id_ville, $longitude, $latitude]);
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
            $id = $put_vars['id_commune'] ?? null;
            $libelle_commune = $put_vars['libelle_commune'] ?? null;
            $id_ville = $put_vars['id_ville'] ?? null; 
            $longitude = $put_vars['longitude'] ?? '123';
            $latitude = $put_vars['latitude'] ?? '123';
            $operations->updateRow(
                'myclean_commune', 
                ['libelle_commune', 'id_ville', 'long', 'lat'], 
                [$libelle_commune, $id_ville, $longitude, $latitude], 
                'id_commune = ?', 
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
