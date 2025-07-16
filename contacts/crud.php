<?php
require_once '../vendor/autoload.php'; 
use Application\CrudRepository\CrudRequests;
session_start();
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addContact'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];
        $etat_contact = $_POST['etat'];
        $date_crea = date('Y-m-d H:i:s');
        try {
            $operations->insertNewRow('myclean_msg_contacts', ['nom', 'email', 'telephone', 'message', 'etat_contact', 'date_crea'], [ $nom, $email, $telephone, $message, $etat_contact, $date_crea]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Contact added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add contact: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../contacts');
        exit();
    }
    if (isset($_POST['editContact'])) {
        $id = $_POST['id2'];
        $nom = $_POST['nom2'];
        $email = $_POST['email2'];
        $telephone = $_POST['telephone2'];
        $message = $_POST['message2'];
        $etat_contact = $_POST['etat2'];
        echo $id;
        try {
            $operations->updateRow('myclean_msg_contacts', ['nom', 'email', 'telephone', 'message', 'etat_contact'], [$nom, $email, $telephone, $message, $etat_contact], 'id_contacts = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Contact updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update contact: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../contacts');
        exit();
    }
    if (isset($_POST['deleteContact'])) {
        $id = $_POST['id_contacts'];
        try {
            $operations->deleteItem('myclean_msg_contacts', 'id_contacts', $id);
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
        header('Location: ../contacts');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'ID invalide']);
        exit;
    }
    $id = (int)$_POST['id'];
    $sql = "SELECT  c.id_contacts AS id,
                    c.nom AS nom,
                    c.email AS email,
                    c.telephone AS telephone,
                    c.message AS message,
                    c.etat_contact AS etat_contact
                FROM 
                    myclean_msg_contacts c
                WHERE 
                    c.id_contacts = ?";
    $statement = $operations->connection->prepare($sql);
    $statement->execute([$id]);
    $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

    http_response_code(200);
    $response = [
        'data' => $success[0],
    ];
    echo json_encode($response);

}

    

