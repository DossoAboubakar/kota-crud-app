<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addReinit'])) {
        $token = $_POST['token'];
        $date_reinit = $_POST['date_reinit'];
        $etat_reinit = $_POST['etat_reinit'];
        $email = $_POST['email'];
        try {
            $operations->insertNewRow('myclean_reinit', ['token_reinit', 'date_reinit', 'etat_reinit', 'id_email'], [ $token, $date_reinit, $etat_reinit, $email]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Reinitialisation added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../reinit');
        exit();
    }
    if (isset($_POST['editReinit'])) {
        $id = $_POST['id2'];
        $token = $_POST['token2'];
        $date_reinit = $_POST['date_reinit2'];
        $etat_reinit = $_POST['etat_reinit2'];
        $email = $_POST['email2'];
        try {
            $operations->updateRow('myclean_reinit', ['token_reinit', 'date_reinit', 'etat_reinit', 'id_email'], [$token, $date_reinit, $etat_reinit, $email], 'id_reinit = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Reinitialisation updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../reinit');
        exit();
    }
    if (isset($_POST['deleteReinit'])) {
        $id = $_POST['id_reinit'];
        try {
            $operations->deleteItem('myclean_reinit', 'id_reinit', $id);
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
        header('Location: ../reinit');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT  a.id_reinit AS id,
                        a.token_reinit AS token,
                        a.date_reinit AS date_reinit,
                        a.etat_reinit AS etat_reinit,
                        a.id_email AS email
                    FROM 
                        myclean_reinit a
                    WHERE 
                        a.id_reinit = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    
}
