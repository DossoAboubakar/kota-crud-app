<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addEquipement'])) {
        $libelle = $_POST['libelle'];
       
        try {
            $operations->insertNewRow('myclean_equipement', ['libelle_equipement'], [ $libelle]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Equipement added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../equipement');
        exit();
    }
    if (isset($_POST['editEquipement'])) {
        $id = $_POST['id2'];
        $libelle = $_POST['libelle2'];
        try {
            $operations->updateRow('myclean_equipement', ['libelle_equipement'], [$libelle], 'id_equipement = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Equipement updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update admin: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../equipement');
        exit();
    }
   
    if (isset($_POST['deleteEquipement'])) {
        $id = $_POST['id_equipement'];
        try {
            $operations->deleteItem('myclean_equipement', 'id_equipement', $id);
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
        header('Location: ../equipement');
        exit();
    }

    if (isset($_POST['id']) ) {
        if ($_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => 'ID invalide',
                'data' => null,
                'timestamp' => date('c')
            ]);
            exit;
        }

        $id = (int)$_POST['id'];
        $sql = "SELECT  a.id_equipement AS id,
                        a.libelle_equipement AS libelle,
                    FROM 
                        myclean_equipement a
                    WHERE 
                        a.id_equipement = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    }
}
    

