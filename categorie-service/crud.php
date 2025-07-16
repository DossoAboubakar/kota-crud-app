<?php
require_once '../vendor/autoload.php'; 
use Application\CrudRepository\CrudRequests;
session_start();
$operations = new CrudRequests(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['addCategorieService'])) {
        $id_categorie = $_POST['id_categorie'];
        $id_categorie1 = $_POST['id_categorie'];
        $libelle_categorie_service = $_POST['libelle'];
        $uploadDir = 'uploads/';
        $imagePath = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $uploadDir . uniqid() . '_' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        }
        $img_categorie_service = $imagePath;
        $description_categorie_service = $_POST['description'];
        $etat_categorie_service = $_POST['statut'];
        try {
            $operations->insertNewRow('myclean_categorie_service', ['id_categorie', 'id_categorie1', 'libelle_categorie_service', 'img_categorie_service', 'description_categorie_service', 'etat_categorie_service'], [ $id_categorie, $id_categorie1, $libelle_categorie_service, $img_categorie_service, $description_categorie_service, $etat_categorie_service]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Categorie Service added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add Categorie Service: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../categorie-service');
        exit();
    }
    if (isset($_POST['editCategorieService'])) {
        $id = (int) $_POST['id2'];
        $id_categorie = $_POST['categorie2'];
        $id_categorie1 = $_POST['categorie12'];
        $libelle_categorie_service = $_POST['libelle_categorie_service2'];
        $uploadDir = 'uploads/';
        $img_categorie_service = '';
        $imagePath = null;
        if (isset($_FILES['image2']) && $_FILES['image2']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $uploadDir . uniqid() . '_' . basename($_FILES['image2']['name']);
            move_uploaded_file($_FILES['image2']['tmp_name'], $imagePath);
            $img_categorie_service = $imagePath;
        }
        $description_categorie_service = $_POST['description2'];
        $etat_categorie_service = $_POST['statut2'];
        try {
            $operations->updateRow('myclean_categorie_service', ['id_categorie', 'id_categorie1', 'libelle_categorie_service', 'img_categorie_service', 'description_categorie_service', 'etat_categorie_service'], [$id_categorie, $id_categorie1, $libelle_categorie_service, $img_categorie_service, $description_categorie_service, $etat_categorie_service], 'id_categorie_service = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Categorie Service updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update Categorie Service: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../categorie-service');
        exit();
    }
    if (isset($_POST['deleteCategorieService'])) {
        $id = (int) $_POST['id'];
        try {
            $operations->deleteItem('myclean_categorie_service', 'id_categorie_service', $id);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données supprimées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                echo json_encode($response);
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../categorie-service');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $success = $operations->getItemById('myclean_categorie_service', 'id_categorie_service', $id);
        http_response_code(200);
        $response = [
            'success' => true,
            'message' => 'données récupérées avec succes',
            'data' => $success,
            'timestamp' => date('c')
        ];
        $_SESSION['message'] = "Categorie Service retrieved successfully";
        $_SESSION['message_type'] = 'success';
        echo json_encode($response);
    
}
