<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addWebType'])) {
        $lib_type = $_POST['libelle'];
        try {
            $operations->insertNewRow('myclean_web_type', ['lib_typ'], [ $lib_type]);
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
        header('Location: ../webType');
        exit();
    }
    if (isset($_POST['editWebType'])) {
        $id = $_POST['id2'];
        $lib_type = $_POST['libelle2'];
        try {
            $operations->updateRow('myclean_web_type', ['lib_typ'], [$lib_type], 'id_type = ?', [$id]);
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
        header('Location: ../webType');
        exit();
    }
    if (isset($_POST['deleteWebType'])) {
        $id = $_POST['id_type'];
        try {
            $operations->deleteItem('myclean_web_type', 'id_type', $id);
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
        header('Location: ../webType');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT  wt.id_type AS id,
                        wt.lib_typ AS libelle
                    FROM 
                        myclean_web_type wt
                    WHERE 
                        wt.id_type = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    
}
