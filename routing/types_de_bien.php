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
        $success = $operations->deleteItem('laclef_typebien_detail', 'id_typebien_detail', $id);
        http_response_code(response_code: 200);
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
            $success = $operations->getItemById('laclef_typebien_detail', 'id_typebien_detail', $id);
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
        if (isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
     
        try {
                $id = $_POST['id'];
                $libelle_typebien_detail = $_POST['libelle'];
                $image_typebien_detail = $_FILES['image'] ?? 'rien';
                $uploadDir = 'uploads/';
                $imagePath = null;
                
                
                    if ($image_typebien_detail && $image_typebien_detail['error'] === UPLOAD_ERR_OK) {
                        $imagePath = $uploadDir . uniqid() . '_' . basename($image_typebien_detail['name']);
                        move_uploaded_file($image_typebien_detail['tmp_name'], $imagePath);
                    }
                
                    $operations->updateRow(
                        'laclef_typebien_detail', 
                        ['libelle_typebien_detail', 'image_typebien_detail'], 
                        [$libelle_typebien_detail, $imagePath], 
                        'id_typebien_detail = ?', 
                        [$id]
                    );
                
                    echo json_encode(['success' => true]);
                    exit;
                } catch (\Throwable $th) {
                    throw new Exception($th->getMessage(),500);
                }
                
            } else {
 
                try {
                    $libelle_typebien_detail = $_POST['libelle'];
                    $image_typebien_detail = $_FILES['image'];
                    $uploadDir = 'uploads/';
            
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
            
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            
                    if (!in_array($image_typebien_detail['type'], $allowedTypes) ) {
                        http_response_code(400);
                        echo json_encode([
                            'success' => false,
                            'message' => 'Type de fichier non autorisé. Seuls JPEG, PNG et GIF sont autorisés.',
                            'data' => null,
                            'timestamp' => date('c')
                        ]);
                        exit;
                    }
                    $imageExtension = pathinfo($image_typebien_detail['name'], PATHINFO_EXTENSION);
            
                    $imageNewName = uniqid('img_') . '.' . $imageExtension;
            
                    $imagePath = $uploadDir . $imageNewName;
            
                    move_uploaded_file($image_typebien_detail['tmp_name'], $imagePath);
            
                    $operations->insertNewRow(
                        'laclef_typebien_detail',
                        ['libelle_typebien_detail', 'image_typebien_detail'],
                        [$libelle_typebien_detail, $imagePath]
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
