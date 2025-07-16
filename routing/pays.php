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
        $success = $operations->deleteItem('myclean_pays', 'id', $id);
        http_response_code(200);
        break;


        case 'POST':
            try {
                $code = $_POST['code'];
                $alpha2 = $_POST['alpha2'];
                $alpha3 = $_POST['alpha3'];
                $nom_en_gb = $_POST['nom_en_gb'];
                $nom_fr_fr = $_POST['nom_fr_fr'];
                $operations->insertNewRow('myclean_pays', ['code', 'alpha2', 'alpha3', 'nom_en_gb', 'nom_fr_fr'], [$code, $alpha2, $alpha3, $nom_en_gb, $nom_fr_fr]);
                http_response_code(200);
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

            case 'GET':
                try {
                    if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                        http_response_code(400);
                        echo json_encode(['error' => 'ID invalide']);
                        exit;
                    }
                    $id = (int)$_GET['id'];
                    $success = $operations->getItemById('myclean_pays', 'id', $id);
                    http_response_code(200);
                    $response = [
                        'success' => true,
                        'message' => 'données récupérées avec succes',
                        'data' => $success,
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
                    $code = $put_vars['code'] ?? null;
                    $alpha2 = $put_vars['alpha2'] ?? null;
                    $alpha3 = $put_vars['alpha3'] ?? null;
                    $nom_en_gb = $put_vars['nom_en_gb'] ?? null;
                    $nom_fr_fr = $put_vars['nom_fr_fr'] ?? null;
                    
                    // Journalisation pour débogage
                    error_log("Données reçues: " . print_r($put_vars, true));
                    
                    if (!$id || !$code || !$alpha2 || !$alpha3 || !$nom_en_gb || !$nom_fr_fr) {
                        http_response_code(400);
                        echo json_encode([
                            'error' => 'Données manquantes',
                            'received_data' => $put_vars // Pour le débogage
                        ]);
                        exit;
                    }
                    
                    // Mise à jour dans la base de données
                    $operations->updateRow(
                        'myclean_pays', 
                        ['code', 'alpha2', 'alpha3', 'nom_en_gb', 'nom_fr_fr'], 
                        [$code, $alpha2, $alpha3, $nom_en_gb, $nom_fr_fr], 
                        'id_pays = ?', 
                        [$id]
                    );
                    
                    // Réponse de succès
                    http_response_code(200);
                    $response = [
                        'success' => true,
                        'message' => 'Données mises à jour avec succès',
                        'data' => [
                            'id_pays' => $id,
                            'code' => $code,
                            'alpha2' => $alpha2,
                            'alpha3' => $alpha3,
                            'nom_en_gb' => $nom_en_gb,
                            'nom_fr_fr' => $nom_fr_fr
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
