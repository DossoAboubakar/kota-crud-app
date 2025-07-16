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
        $success = $operations->deleteItem('myclean_client', 'id_client', $id);
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
        $success = $operations->getItemById('myclean_client', 'id_client', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        try {
        $nom = $_POST['nom'] ?? null;
        $prenom = $_POST['prenom'] ?? null;
        $email = $_POST['email'] ?? null;
        $telephone = $_POST['tel'] ?? null;
        $ville = $_POST['ville'] ?? null;
        $indicatif = $_POST['indicatif'] ?? null;
        $token = $_POST['token'] ?? null;
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $etat = $_POST['etat'] ?? null;
        $adresseUser = $_POST['adresseUser'] ?? null;
        $photoprofil = $_POST['photoprofil'] ?? 'rien';
        $codereinit = $_POST['codereinit'] ?? '100';
        $expirationcode = $_POST['expirationcode'] ?? '100';
        $date_crea = date('Y-m-d H:i:s');
        $success = $operations->insertNewRow('myclean_client', ['nom_client', 'prenom_client', 'photoprofil', 'tel_client', 'email_client', 'token', 'mdp_client', 'date_creation_client', 'etat_client', 'communeUser', 'adresseUser', 'codereinit', 'expirationcode'], [$nom, $prenom, $indicatif, $telephone, $email, $token, $mdp, $date_crea, $etat, $ville, $adresseUser, $codereinit, $expirationcode]);
        echo json_encode(['success' => $success]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        
        break;

    case 'PUT':
        try {
            $put_vars = file_get_contents("php://input");
            parse_str($put_vars, $put_vars);
            $id = $put_vars['id'] ?? null;
            $nom = $put_vars['nom'] ?? null;
            $prenom = $put_vars['prenom'] ?? null;
            $email = $put_vars['email'] ?? null;
            $telephone = $put_vars['tel'] ?? null;
            $indicatif = $put_vars['indicatif'] ?? null;
            $token = $put_vars['token'] ?? null;
            $mdp = password_hash($put_vars['mdp'] ?? '', PASSWORD_DEFAULT);
            $etat = $put_vars['etat'] ?? null;
            $communeUser = $put_vars['commune'] ?? `1`;
            $adresseUser = $put_vars['adresse'] ?? null;
            $photoprofil = $put_vars['photoprofil'] ?? 'rien';
            $codereinit = $put_vars['codereinit'] ?? '100';
            $expirationcode = $put_vars['expirationcode'] ?? '100';
            $operations->updateRow(
                'myclean_client', 
                ['nom_client', 'prenom_client', 'photoprofil', 'tel_client', 'email_client', 'token', 'mdp_client', 'etat_client', 'communeUser', 'adresseUser', 'codereinit', 'expirationcode'], 
                [$nom, $prenom, $photoprofil, $telephone, $email, $token, $mdp, $etat, $communeUser, $adresseUser, $codereinit, $expirationcode], 
                'id_client = ?', 
                [$id]
            );
            
        echo json_encode(['success' => true]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
