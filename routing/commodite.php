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
        $success = $operations->deleteItem('laclef_commodites', 'id_commodites', $id);
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
        $success = $operations->getItemById('laclef_commodites', 'id_commodites', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        if (isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
            try {
                $id = $_POST['id'] ?? null;
                $titre = $_POST['titre'] ?? null;
                $type = $_POST['type'] ?? null; 
                $upload_dir = 'uploads/';
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                $image = $_FILES['image'] ?? null;
                $activeimage = $_FILES['activeimage'] ?? null;
                $image_name = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
                move_uploaded_file($image['tmp_name'], $upload_dir . $image_name);
                $activeimage_name = uniqid() . '.' . pathinfo($activeimage['name'], PATHINFO_EXTENSION);
                move_uploaded_file($activeimage['tmp_name'], $upload_dir . $activeimage_name);
                $image = $image_name;
                $activeimage = $activeimage_name;
                $ispro = $_POST['ispro'] ?? null;
                $code = $_POST['code'] ?? null;
                $operations->updateRow(
                    'laclef_commodites', 
                    ['libelle_commodites', 'id_type', 'image_commodites', 'activeimage', 'ispro', 'code_commodite'], 
                    [$titre, $type , $image, $activeimage, $ispro, $code], 
                    'id_commodites = ?', 
                    [$id]
                );
                
            echo json_encode(['success' => true]);
            } catch (Exception $e) {
                http_response_code(500);
                echo json_encode(['error' => $e->getMessage()]);
            }
            
            break;
        } else {
        try {
        $titre = $_POST['titre'] ?? null;
        $type = $_POST['type'] ?? null; 
        $upload_dir = 'uploads/';
        $image = $_FILES['image'] ?? null;
        $activeimage = $_FILES['activeimage'] ?? null;
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $image_name = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        move_uploaded_file($image['tmp_name'], $upload_dir . $image_name);
        $activeimage_name = uniqid() . '.' . pathinfo($activeimage['name'], PATHINFO_EXTENSION);
        move_uploaded_file($activeimage['tmp_name'], $upload_dir . $activeimage_name);
        $image = $image_name;
        $activeimage = $activeimage_name;
        $ispro = $_POST['ispro'] ?? null;
        $code = $_POST['code'] ?? null;
        $success = $operations->insertNewRow('laclef_commodites', ['libelle_commodites', 'id_type', 'image_commodites', 'activeimage', 'ispro', 'code_commodite'], [$titre,  $type, $image, $activeimage, $ispro, $code]);
        echo json_encode($success);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        
        break;
    }
    

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
