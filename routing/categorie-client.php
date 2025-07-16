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
            $success = $operations->deleteItem('myclean_categorie_client', 'id_categorie_client', $id);
            http_response_code(200);
            $response = [
            'success' => true,
            'message' => 'données supprimées avec succes',
            'data' => null,
            'timestamp' => date('c')
        ];
        echo json_encode($response);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(),500);
        }
        break;

    case 'GET':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $operations->getItemById('myclean_categorie_client', 'id_categorie_client', $id);
            http_response_code(200);
            $response = [
                'success' => true,
                'message' => 'données récupérées avec succes',
                'data' => $success,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(),500);
        }

    case 'POST':
        $libelle = $_POST['libelle'];
        $success = $operations->insertNewRow('myclean_categorie_client', ['libelle_categorie_client'], [$libelle]);
        http_response_code(200);
        $response = [                                                                                                                                    
            'success' => true,
            'message' => 'données insérées avec succes',
            'data' => null,
            'timestamp' => date('c')
        ];
        echo json_encode($response);
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        try {
            $libelle = $_PUT['libelle'];
            $id = $_PUT['id'];
            $success = $operations->updateRow('myclean_categorie_client', ['libelle_categorie_client'], [$libelle], 'id_categorie_client = ?', [$id]);
            http_response_code(200);
            $response = [
                'success' => true,
                'message' => 'données modifiées avec succes',
                'data' => null,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(),500);
        }

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
