<?php
require_once '../vendor/autoload.php'; 
use Application\CrudRepository\CrudRequests;
session_start();
$operations = new CrudRequests(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['addCategorieServiceListe'])) {
    
        $id_categorie = (int)$_POST['id_categorie'];
        $id_categorie_service = (int)$_POST['id_categorie_service'];
        $description = trim($_POST['Description'] ?? '');
        $libelle_cat_service = trim($_POST['Categorie'] ?? '');
        $quantite = (int)($_POST['Quantité'] ?? 0);
        $montant = (float)($_POST['Montant'] ?? 0);
        $prix = (float)($_POST['Prix'] ?? 0);
        $etat = (int)($_POST['statut'] ?? 1);
        
        $uploadDir = 'uploads/';    
        $imagePath = null;
        // Gestion de l'upload de l'image
        if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK) {
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $imagePath = $uploadDir . uniqid() . '_' . basename($_FILES['Image']['name']);
            if (!move_uploaded_file($_FILES['Image']['tmp_name'], $imagePath)) {
                throw new Exception('Erreur lors de l\'enregistrement de l\'image');
            }
        }
        
        try {
            $operations->insertNewRow('myclean_categorie_service_liste', [
                'id_categorie',
                'id_categorie_service',
                'description_categorie_service_liste',
                'libelle_categorie_service_liste',
                'img_categorie_service',
                'qte',
                'montant',
                'prix',
                'etat_categorie_service_liste'
            ], [
                $id_categorie,
                $id_categorie_service,
                $description,
                $libelle_cat_service,
                $imagePath,
                $quantite,
                $montant,
                $prix,
                $etat
            ]);
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
        header('Location: ../categorie-service-liste');
        exit();
    }
    if (isset($_POST['editCategorieServiceListe'])) {
        $id = $_POST['id2'];
        $id_categorie = $_POST['id_categorie2'];
        $id_categorie_service = $_POST['id_categorie_service2'];
        $img_categorie_service = $_POST['img_categorie_service2'];
        if (isset($_FILES['Image2']) && $_FILES['Image2']['error'] === UPLOAD_ERR_OK) {
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $imagePath = $uploadDir . uniqid() . '_' . basename($_FILES['Image2']['name']);
            if (!move_uploaded_file($_FILES['Image2']['tmp_name'], $imagePath)) {
                throw new Exception('Erreur lors de l\'enregistrement de l\'image');
            }
            $img_categorie_service = $imagePath;
        }
       
        $description_categorie_service = $_POST['Description2'];
        $etat_categorie_service = $_POST['statut2'];
        try {
            $operations->updateRow('myclean_categorie_service_liste', ['id_categorie', 'id_categorie_service', 'img_categorie_service', 'description_categorie_service_liste', 'etat_categorie_service_liste'], [$id_categorie, $id_categorie_service, $img_categorie_service, $description_categorie_service, $etat_categorie_service], 'id_categorie_service_liste = ?', [$id]);
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
        header('Location: ../categorie-service-liste');
        exit();
    }
    if (isset($_POST['deleteCategorieServiceListe'])) {
        $id = $_POST['id'];
        try {
            $operations->deleteItem('myclean_categorie_service_liste', 'id_categorie_service_liste', $id);
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
        header('Location: ../categorie-service-liste');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $success = $operations->getItemById('myclean_categorie_service_liste', 'id_categorie_service_liste', $id);
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
if (isset($_POST['action']) && $_POST['action'] === 'getSubCategories') {
    $id = (int) $_POST['id'];
    if ($id <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'ID invalide']);
        exit;
    }

    $sql = "SELECT id_categorie_service, libelle_categorie_service FROM myclean_categorie_service WHERE id_categorie = ?";
    $statement = $operations->connection->prepare($sql);
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    $options = '<option values="">-- Choisir une sous-catégorie --</option>';
    foreach ($results as $row) {
        $options .= '<option value="' . $row['id_categorie_service'] . '">' . htmlspecialchars($row['libelle_categorie_service']) . '</option>';
    }

    echo $options;
    exit;
}

