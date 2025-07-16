<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addWebUser'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $type = $_POST['type'];
        $etat = $_POST['etat'];
        try {
            $operations->insertNewRow('myclean_web_user', ['nom_user', 'prenom_user', 'email_user', 'login_user', 'mdp_user', 'type_user', 'etat'], [ $nom, $prenom, $email, $login, $mdp, $type, $etat]);
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
        header('Location: ../webUser');
        exit();
    }
    if (isset($_POST['editWebUser'])) {
        $id = $_POST['id2'];
        $nom = $_POST['nom2'];
        $prenom = $_POST['prenom2'];
        $email = $_POST['email2'];
        $login = $_POST['login2'];
        $mdp = $_POST['mdp2'];
        $type = $_POST['type2'];
        $etat = $_POST['etat2'];
        try {
            $operations->updateRow('myclean_web_user', ['nom_user', 'prenom_user', 'email_user', 'login_user', 'mdp_user', 'type_user', 'etat'], [$nom, $prenom, $email, $login, $mdp, $type, $etat], 'id_user = ?', [$id]);
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
        header('Location: ../webUser');
        exit();
    }
    if (isset($_POST['deleteWebUser'])) {
        $id = $_POST['id_user'];
        try {
            $operations->deleteItem('myclean_web_user', 'id_user', $id);
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
        header('Location: ../webUser');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT  a.id_user AS id,
                        a.nom_user AS nom,
                        a.prenom_user AS prenom,
                        a.email_user AS email,
                        a.login_user AS login,
                        a.mdp_user AS mdp,
                        a.type_user AS type,
                        a.etat AS etat
                    FROM 
                        myclean_web_user a
                    WHERE 
                        a.id_user = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    
}
