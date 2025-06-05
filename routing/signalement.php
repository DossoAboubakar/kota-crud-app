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
        $success = $operations->deleteItem('laclef_signalement', 'id_signalement', $id);
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
        $success = $operations->getItemById('laclef_signalement', 'id_signalement', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        try {
        $id_annonce = $_POST['id_annonce'] ?? null;
        $nom = $_POST['nom'] ?? null;
        $email = $_POST['email'] ?? null;
        $telephone = $_POST['telephone'] ?? null;
        $message = $_POST['message'] ?? null;
        $motif = $_POST['motif'] ?? null;
        $etat_contact = $_POST['etat_contact'] ?? null;
        $date_crea = date('Y-m-d H:i:s');
        $success = $operations->insertNewRow('laclef_signalement', ['id_annonce', 'nom', 'email', 'telephone', 'message', 'motif', 'etat_contact', 'date_crea'], [$id_annonce, $nom, $email, $telephone, $message, $motif, $etat_contact, $date_crea]);
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
            $id = $put_vars['id_signalement'] ?? null;
            $id_annonce = $put_vars['id_annonce'] ?? null;
            $nom = $put_vars['nom'] ?? null;
            $email = $put_vars['email'] ?? null;
            $telephone = $put_vars['telephone'] ?? null;
            $message = $put_vars['message'] ?? null;
            $motif = $put_vars['motif'] ?? null;
            $etat_contact = $put_vars['etat_contact'] ?? null;
            $date_crea = date('Y-m-d H:i:s');
            $operations->updateRow(
                'laclef_signalement', 
                ['id_annonce', 'nom', 'email', 'telephone', 'message', 'motif', 'etat_contact', 'date_crea'], 
                [$id_annonce, $nom, $email, $telephone, $message, $motif, $etat_contact, $date_crea], 
                'id_signalement = ?', 
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
