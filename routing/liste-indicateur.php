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
        $success = $operations->deleteItem('myclean_liste_indicateur', 'id_indic', $id);
        http_response_code(200);
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
            $success = $operations->getItemById('myclean_liste_indicateur', 'id_indic', $id);
            http_response_code(200);
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
        if (isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
     
        try {
            
                $id = $_POST['id'];
                $pays = $_POST['pays'];
                $drapeau = $_FILES['flag'] ?? 'rien';
                $indicatif = $_POST['indicatif'];
                $uploadDir = 'uploads/';
                $imagePath = null;
                $image = $_FILES['flag'];
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
                $imageNewName = uniqid('img_') . '.' . $imageExtension; 
                
                    if ($drapeau && $drapeau['error'] === UPLOAD_ERR_OK) {
                        $imagePath = $uploadDir . $imageNewName;
                        move_uploaded_file($drapeau['tmp_name'], $imagePath);
                    }
                
                    $operations->updateRow(
                        'myclean_liste_indicateur', 
                        ['pays', 'drapeau', 'libelle'], 
                        [$pays, $imagePath, $indicatif], 
                        'id_indic = ?', 
                        [$id]
                    );
                
                    echo json_encode(['success' => true]);
                    exit;
                } catch (\Throwable $th) {
                    throw new Exception($th->getMessage(),500);
                }
                
            } else {
 
                try {
                    $pays = $_POST['pays'];
                    $drapeau = $_FILES['flag'] ?? 'rien';
                    $indicatif = $_POST['indicatif'];
                    $uploadDir = 'uploads/';
            
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
            
                    $image = $_FILES['flag'];
            
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            
                    if (!in_array($image['type'], $allowedTypes) ) {
                        http_response_code(400);
                        echo json_encode([
                            'success' => false,
                            'message' => 'Type de fichier non autorisé. Seuls JPEG, PNG et GIF sont autorisés.',
                            'data' => null,
                            'timestamp' => date('c')
                        ]);
                        exit;
                    }
                    $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
            
                    $imageNewName = uniqid('img_') . '.' . $imageExtension;
            
                    $imagePath = $uploadDir . $imageNewName;
            
                    move_uploaded_file($image['tmp_name'], $imagePath);
            
                    $operations->insertNewRow(
                        'myclean_liste_indicateur',
                        ['pays','drapeau', 'libelle'],
                        [$pays, $imagePath,$indicatif]
                    );
                    http_response_code(200);
                    $response = [
                        'success' => true,
                        'message' => 'Données insérées avec succès',
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
                    break;
                } catch (\Throwable $e) {
                    http_response_code(500);
                    $response = [
                        'success' => false,
                        'message' => $e->getMessage(),
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
                    break;
                }            }

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
                                                                                     