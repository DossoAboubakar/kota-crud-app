<?php

use Application\CrudRepository\CrudRequests;

$operations = $operations ?? new CrudRequests(); 
switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $operations->deleteItem('laclef_annee', 'id_annee', $id);
            http_response_code(response_code: 200);
            $response = [
                'success' => true,
                'message' => 'suppression avec succes',
                'data' => null,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }

    case 'GET':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $operations->getItemById('laclef_annee', 'id_annee', $id);
            http_response_code(response_code: 200);
            $response = [
                'success' => true,
                'message' => 'données récupérées avec succes',
                'data' => $success,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }

    case 'POST':
            try {
                $libelle = $_POST['libelle'];
                $operations->insertNewRow('laclef_annee', ['libelle_annee'], [$libelle]);
                http_response_code(response_code: 200);
                $response = [
                        'success' => true,
                        'message' => 'données inserées avec succes',
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
            } catch (\Throwable $e) {
                throw new Exception($e->getMessage(),500);
            }
            break;
        
            case 'PUT':
                try {
                    session_start();
                    // Récupérer les données brutes
                    $input = file_get_contents("php://input");
                    parse_str($input, $put_vars);
                    
                    // Récupérer les valeurs avec les bons noms de champs
                    $_SESSION['put_vars'] = $put_vars;
                    
                    $id = $put_vars['id'] ?? null;
                    $libelle = $put_vars['libelle'] ?? null;
                    
                    // Journalisation pour débogage
                    error_log("Données reçues: " . print_r($put_vars, true));
                    
                    if (!$id || !$libelle) {
                        http_response_code(400);
                        echo json_encode([
                            'error' => 'Données manquantes',
                            'received_data' => $put_vars // Pour le débogage
                        ]);
                        exit;
                    }
                    
                    // Mise à jour dans la base de données
                    $operations->updateRow(
                        'laclef_annee', 
                        ['libelle_annee'], 
                        [$libelle], 
                        'id_annee = ?', 
                        [$id]
                    );
                    
                    // Réponse de succès
                    http_response_code(200);
                    $response = [
                        'success' => true,
                        'message' => 'Données mises à jour avec succès',
                        'data' => [
                            'id_annee' => $id,
                            'libelle_annee' => $libelle
                        ],
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
                    
                } catch (\Throwable $e) {
                    error_log("Erreur lors de la mise à jour: " . $e->getMessage());
                    http_response_code(500);
                    echo json_encode([
                        'error' => 'Erreur serveur',
                        'message' => $e->getMessage()
                    ]);
                }
                break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
