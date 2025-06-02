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
        $success = $operations->deleteItem('laclef_transaction', 'id_transaction', $id);
        http_response_code(response_code: 200);
        break;
    case 'PUT':
            session_start();
            
            parse_str(file_get_contents('php://input'), $put_vars);
            
            $id = $put_vars['id'] ?? null;
            $titre = $put_vars['titre'] ?? null;
            
        
            $_SESSION['put_vars'] = $put_vars;
        
            error_log("Données reçues: " . print_r($put_vars, true));
        
            if (!$id || !$titre) {
                http_response_code(400);
                echo json_encode([
                    'error' => 'Données manquantes',
                    'received_data' => $put_vars
                ]);
                exit();
            }
        
            try {
                $result = $operations->updateRow(
                    'laclef_transaction',
                    ['titre_transaction'],
                    [$titre],
                    'id_transaction = ?',
                    [$id]
                );
                
                if ($result) {
                    echo json_encode(['success' => true]);
                } else {
                    throw new Exception("Échec de la mise à jour");
                }
            } catch (Exception $e) {
                http_response_code(500);
                echo json_encode([
                    'error' => 'Erreur lors de la mise à jour',
                    'message' => $e->getMessage()
                ]);
            }
            break;
    case 'POST':
        try {
            $titre = $_POST['titre'];
            $operations->insertNewRow('laclef_transaction', ['titre_transaction'], [$titre]);
            http_response_code(response_code: 200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                echo json_encode($response);
        } catch (\Throwable $e) {
            http_response_code(500);
            echo json_encode([
                'error' => 'Erreur lors de l\'insertion',
                'message' => $e->getMessage()
            ]);
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
            $success = $operations->getItemById('laclef_transaction', 'id_transaction', $id);
            http_response_code(response_code: 200);
            $response = [
                'success' => true,
                'message' => 'données récupérées avec succes',
                'data' => $success,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
        } catch (\Throwable $e) {
            http_response_code(500);
            echo json_encode([
                'error' => 'Erreur lors de la récupération',
                'message' => $e->getMessage()
            ]);
        }
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
