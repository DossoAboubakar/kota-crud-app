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
        $success = $operations->deleteItem('laclef_liste_localisation', 'id_liste', $id);
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
        $success = $operations->getItemById('laclef_liste_localisation', 'id_liste', $id);
        echo json_encode($success);
       }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
        break;

    case 'POST':
        try {
        $code = $_POST['code'] ?? null;
        $id_zone = $_POST['id_zone'] ?? null;
        $id_ville = $_POST['id_ville'] ?? null;
        $id_commune = $_POST['id_commune'] ?? null;
        $libelle_zone = $_POST['libelle_zone'] ?? null;
        $identifiant = $_POST['identifiant'] ?? null;
        $latitude = $_POST['latitude'] ?? null;
        $longitude = $_POST['longitude'] ?? null;
        $libelle_localisation = $_POST['libelle_localisation'] ?? null;
        $etat = $_POST['etat'] ?? null; 
        $libelle_ville = '';
        $libelle_commune = '';
        $success = $operations->insertNewRow('laclef_liste_localisation', ['code_liste', 'id_ville', 'id_commune', 'id_zone', 'libelle_zone',  'id_localisation', 'latitude', 'longitude', 'etat', 'libelle_ville', 'libelle_commune', 'libelle_localisation'], [$code, $id_ville, $id_commune, $id_zone, $libelle_zone, $identifiant, $latitude, $longitude, $etat, $libelle_ville, $libelle_commune, $libelle_localisation]);
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
            $code = $put_vars['code'] ?? null;
            $id_ville = $put_vars['id_ville'] ?? null;
            $id_commune = $put_vars['id_commune'] ?? null;
            $id_zone = $put_vars['id_zone'] ?? null;
            $libelle_zone = $put_vars['libelle_zone'] ?? null;
            $identifiant = $put_vars['identifiant'] ?? null;
            $latitude = $put_vars['latitude'] ?? null;
            $longitude = $put_vars['longitude'] ?? null;
            $etat = $put_vars['etat'] ?? null; 
            $libelle_ville = $put_vars['libelle_ville'] ?? 'null';
            $libelle_commune = $put_vars['libelle_commune'] ?? 'null';
            $libelle_localisation = $put_vars['libelle_localisation'] ?? 'null';
            $operations->updateRow(
                'laclef_liste_localisation', 
                ['code_liste', 'id_ville', 'libelle_ville', 'id_commune', 'libelle_commune', 'id_zone', 'libelle_zone', 'libelle_localisation', 'latitude', 'longitude', 'etat'], 
                [$code, $id_ville, $libelle_ville, $id_commune, $libelle_commune, $id_zone, $libelle_zone, $libelle_localisation, $latitude, $longitude, $etat], 
                'id_liste = ?', 
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
