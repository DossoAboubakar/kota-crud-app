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
            $success = $operations->deleteItem('laclef_categorie', 'id_categorie', $id);
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
            $success = $operations->getItemById('laclef_categorie', 'id_categorie', $id);
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
     
                    $id = $_POST['id'];
                    $libelle = $_POST['libelle'];
                    $image_categorie = $_FILES['image_categorie'] ?? 'rien';
                    $image_categorie1 = $_FILES['image_categorie1'] ?? 'rien';
                    $particulier = $_POST['particulier'];
                    $pro = $_POST['pro'];
                    $uploadDir = 'uploads/';
                    $imagePath = null;
                    $image1Path = null;
                
                    if ($image_categorie && $image_categorie['error'] === UPLOAD_ERR_OK) {
                        $imagePath = $uploadDir . uniqid() . '_' . basename($image_categorie['name']);
                        move_uploaded_file($image_categorie['tmp_name'], $imagePath);
                    }
                
                    if ($image_categorie1 && $image_categorie1['error'] === UPLOAD_ERR_OK) {
                        $image1Path = $uploadDir . uniqid() . '_' . basename($image_categorie1['name']);
                        move_uploaded_file($image_categorie1['tmp_name'], $image1Path);
                    }
                
                    $operations->updateRow(
                        'laclef_categorie', 
                        ['libelle_categorie', 'image_categorie', 'image_categorie1', 'particulier', 'pro'], 
                        [$libelle, $imagePath, $image1Path, $particulier, $pro], 
                        'id_categorie = ?', 
                        [$id]
                    );
                
                    echo json_encode(['success' => true]);
                    exit;
                
            } else {
 
                try {
                    $libelle = $_POST['libelle'];
                    $particulier = $_POST['particulier'];
                    $pro = $_POST['pro'];
                    $uploadDir = 'uploads/';
            
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
            
                    $image = $_FILES['image'];
                    $image1 = $_FILES['image1'];
            
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            
                    if (!in_array($image['type'], $allowedTypes) || !in_array($image1['type'], $allowedTypes)) {
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
                    $image1Extension = pathinfo($image1['name'], PATHINFO_EXTENSION);
            
                    $imageNewName = uniqid('img_') . '.' . $imageExtension;
                    $image1NewName = uniqid('img1_') . '.' . $image1Extension;
            
                    $imagePath = $uploadDir . $imageNewName;
                    $image1Path = $uploadDir . $image1NewName;
            
                    move_uploaded_file($image['tmp_name'], $imagePath);
                    move_uploaded_file($image1['tmp_name'], $image1Path);
            
                    $operations->insertNewRow(
                        'laclef_categorie',
                        ['libelle_categorie', 'image_categorie', 'image_categorie1', 'particulier', 'pro'],
                        [$libelle, $imagePath, $image1Path, $particulier, $pro]
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
