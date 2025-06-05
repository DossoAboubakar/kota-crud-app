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
        $success = $operations->deleteItem('laclef_contacts', 'id_contacts', $id);
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
        $success = $operations->getItemById('laclef_contacts', 'id_contacts', $id);
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
        $id_agence = $_POST['id_agence'] ?? null; 
        $nom = $_POST['nom'] ?? null;
        $email = $_POST['email'] ?? null;
        $telephone = $_POST['telephone'] ?? null;
        $acheteur = $_POST['acheteur'] ?? null;
        $locataire = $_POST['locataire'] ?? null;
        $message = $_POST['message'] ?? null;
        $etat_contact = $_POST['etat_contact'] ?? null;
        $indicUser = $_POST['indicUser'] ?? null;
        $votrerecherche = $_POST['votrerecherche'] ?? null;
        $libvotrerecherche = $_POST['libvotrerecherche'] ?? null;
        $votretype = $_POST['votretype'] ?? null;
        $libvotretype = $_POST['libvotretype'] ?? null;
        $surfacebienmin = $_POST['surfacebienmin'] ?? null;
        $surfacebienmax = $_POST['surfacebienmax'] ?? null;
        $prixmin = $_POST['prixmin'] ?? null;
        $prixmax = $_POST['prixmax'] ?? null;
        $date_crea = date('Y-m-d H:i:s');
        $success = $operations->insertNewRow('laclef_contacts', ['id_annonce', 'id_agence', 'nom', 'email', 'telephone', 'acheteur', 'locataire', 'message', 'etat_contact', 'indicUser', 'votrerecherche', 'libvotrerecherche', 'votretype', 'libvotretype', 'surfacebienmin', 'surfacebienmax', 'prixmin', 'prixmax', 'date_crea'], [$id_annonce, $id_agence, $nom, $email, $telephone, $acheteur, $locataire, $message, $etat_contact, $indicUser, $votrerecherche, $libvotrerecherche, $votretype, $libvotretype, $surfacebienmin, $surfacebienmax, $prixmin, $prixmax, $date_crea]);
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
            $id = $put_vars['id_contacts'] ?? null;
            $id_annonce = $put_vars['id_annonce'] ?? null;
            $id_agence = $put_vars['id_agence'] ?? null; 
            $nom = $put_vars['nom'] ?? null;
            $email = $put_vars['email'] ?? null;
            $telephone = $put_vars['telephone'] ?? null;
            $acheteur = $put_vars['acheteur'] ?? null;
            $locataire = $put_vars['locataire'] ?? null;
            $message = $put_vars['message'] ?? null;
            $etat_contact = $put_vars['etat_contact'] ?? null;
            $indicUser = $put_vars['indicUser'] ?? null;
            $votrerecherche = $put_vars['votrerecherche'] ?? null;
            $libvotrerecherche = $put_vars['libvotrerecherche'] ?? null;
            $votretype = $put_vars['votretype'] ?? null;
            $libvotretype = $put_vars['libvotretype'] ?? null;
            $surfacebienmin = $put_vars['surfacebienmin'] ?? null;
            $surfacebienmax = $put_vars['surfacebienmax'] ?? null;
            $prixmin = $put_vars['prixmin'] ?? null;
            $prixmax = $put_vars['prixmax'] ?? null;
            $date_crea = date('Y-m-d H:i:s');
            $operations->updateRow(
                'laclef_contacts', 
                ['id_annonce', 'id_agence', 'nom', 'email', 'telephone', 'acheteur', 'locataire', 'message', 'etat_contact', 'indicUser', 'votrerecherche', 'libvotrerecherche', 'votretype', 'libvotretype', 'surfacebienmin', 'surfacebienmax', 'prixmin', 'prixmax', 'date_crea'], 
                [$id_annonce, $id_agence, $nom, $email, $telephone, $acheteur, $locataire, $message, $etat_contact, $indicUser, $votrerecherche, $libvotrerecherche, $votretype, $libvotretype, $surfacebienmin, $surfacebienmax, $prixmin, $prixmax, $date_crea], 
                'id_contacts = ?', 
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
