<?php
require_once '../vendor/autoload.php'; 
use Application\CrudRepository\CrudRequests;
session_start();
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addAdmin'])) {
        $login = $_POST['login'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $statut = $_POST['statut'];
        try {
            $operations->insertNewRow('myclean_admin', ['login', 'mdp', 'statut'], [ $login, $password, $statut]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Admin added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../admin');
        exit();
    }
    if (isset($_POST['editAdmin'])) {
        $id = $_POST['id2'];
        $login = $_POST['login2'];
        $password = password_hash($_POST['password2'], PASSWORD_DEFAULT);
        $statut = $_POST['statut2'];
        echo $id;
        try {
            $operations->updateRow('myclean_admin', ['login', 'mdp', 'statut'], [$login, $password, $statut], 'id = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Admin updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../admin');
        exit();
    }
    if (isset($_POST['deleteAdmin'])) {
        $id = $_POST['id'];
        try {
            $operations->deleteItem('myclean_admin', 'id', $id);
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
        header('Location: ../admin');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $success = $operations->getItemById('myclean_admin', 'id', $id);
        http_response_code(200);
        $response = [
            'success' => true,
            'message' => 'données récupérées avec succes',
            'data' => $success,
            'timestamp' => date('c')
        ];
        $_SESSION['message'] = "Admin retrieved successfully";
        $_SESSION['message_type'] = 'success';
        echo json_encode($response);
    
}
