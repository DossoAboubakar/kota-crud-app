<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if (isset($_POST['action']) && $_POST['action'] === 'getSubCategories') {
    $id = (int) $_POST['id'];
    if ($id <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'ID de catégorie invalide']);
        exit;
    }

    $sql = "SELECT id_categorie1, libelle_categorie1 FROM myclean_categorie1 WHERE id_categorie = ?";
    $statement = $operations->connection->prepare($sql);
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    $options = '<option value="">-- Choisir une sous-catégorie --</option>';
    foreach ($results as $row) {
        $options .= '<option value="' . $row['id_categorie1'] . '">' . htmlspecialchars($row['libelle_categorie1']) . '</option>';
    }

    echo $options;
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addCategorie1'])) {
        $libelle_categorie1 = $_POST['libelle_categorie1'];
        $description_categorie1 = $_POST['description_categorie1'];
        $id_categorie = $_POST['id_categorie']?? 2;
        $image_categorie1 = $_POST['image_categorie1'];
        $image_categorie11 = $_POST['image_categorie11'];
        $particulier = $_POST['particulier'];
        $pro = $_POST['pro'];
        try {
            $operations->insertNewRow('myclean_categorie1', ['libelle_categorie1', 'description_categorie1', 'id_categorie', 'image_categorie1', 'image_categorie11', 'particulier', 'pro'], [ $libelle_categorie1, $description_categorie1, $id_categorie, $image_categorie1, $image_categorie11, $particulier, $pro]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Adresse added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../categorie1');
        exit();
    }
    if (isset($_POST['editCategorie1'])) {
        $id = $_POST['id2'];
        $libelle_categorie1 = $_POST['libelle_categorie12'];
        $description_categorie1 = $_POST['description_categorie12'];
        $image_categorie1 = $_POST['image_categorie12'];
        $image_categorie11 = $_POST['image_categorie112'];
        $particulier = $_POST['particulier2'];
        $pro = $_POST['pro2'];
        try {
            $operations->updateRow('myclean_categorie1', ['libelle_categorie1', 'description_categorie1', 'image_categorie1', 'image_categorie11', 'particulier', 'pro'], [$libelle_categorie1, $description_categorie1, $image_categorie1, $image_categorie11, $particulier, $pro], 'id_categorie1 = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Adresse updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../categorie1');
        exit();
    }
    if (isset($_POST['deleteCategorie1'])) {
        $id = $_POST['id'];
        try {
            $operations->deleteItem('myclean_categorie1', 'id_categorie1', $id);
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
        header('Location: ../categorie1');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT  c1.id_categorie1 AS id,
                        c1.libelle_categorie1 AS libelle_categorie1,
                        c1.description_categorie1 AS description_categorie1,
                        c1.image_categorie1 AS image_categorie1,
                        c1.image_categorie11 AS image_categorie11,
                        c1.particulier AS particulier,
                        c1.pro AS pro,
                        c.id_categorie AS id_categorie,
                        c.libelle_categorie AS libelle_categorie

                    FROM                           
                        myclean_categorie1 c1
                    LEFT JOIN 
                        myclean_categorie c ON c1.id_categorie = c.id_categorie
                    WHERE 
                        c1.id_categorie1 = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    
}
