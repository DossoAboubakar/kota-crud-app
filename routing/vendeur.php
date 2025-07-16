<?php

use Application\CrudRepository\CrudRequests;

$operations = $operations ?? new CrudRequests(); 
switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $operations->deleteItem('myclean_vendeur', 'id_vendeur', $id);
            http_response_code(200);
            $response = [
                'success' => true,
                'message' => 'suppression avec succes',
                'data' => null,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }

    case 'GET':
        try {
            if (!isset($_GET['id']) || $_GET['id'] <= 0) {
                http_response_code(400);
                echo json_encode(['error' => 'ID invalide']);
                exit;
            }
            $id = (int)$_GET['id'];
            $success = $operations->getItemById('myclean_vendeur', 'id_vendeur', $id);
            http_response_code(200);
            echo json_encode($success);
            break;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }

    case 'POST':
            if (isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
     
                    $id = $_POST['id_vendeur'];
                    $id_pro = $_POST['id_pro'];
                    $image = $_FILES['image'] ?? 'rien';
                    $type_vendeur = $_POST['type_vendeur'];
                    $mdp_vendeur = $_POST['mdp_vendeur'];
                    $description_vendeur = $_POST['description_vendeur'];
                    $nomsociete = $_POST['nomsociete'];
                    $statut = $_POST['statut'];
                    $immatriculation = $_POST['immatriculation'];
                    $adresse = $_POST['adresse'];
                    $legerant = $_POST['legerant'];
                    $lenom = $_POST['lenom'];
                    $leprenom = $_POST['leprenom'];
                    $indicatif = $_POST['indicatif'];
                    $telephone = $_POST['telephone'];
                    $email = $_POST['email'];
                    $etat = $_POST['etat'];
                    $date_creation = date('Y-m-d H:i:s');
                    $horaires = $_POST['horaires'];
                    $equipes = $_POST['equipes'];
                    $uid = $_POST['uid'];
                    $nb_unite = $_POST['nb_unite'];
                    $uploadDir = 'uploads/';
                    $imagePath = null;
                
                    if ($image && $image['error'] === UPLOAD_ERR_OK) {
                        $imagePath = $uploadDir . uniqid() . '_' . basename($image['name']);
                        move_uploaded_file($image['tmp_name'], $imagePath);
                    }
                
                    $operations->updateRow(
                        'myclean_vendeur', 
                        ['id_pro', 'type_vendeur', 'mdp_vendeur',  'description_vendeur', 'nomsociete1', 'statut1', 'immatriculation1', 'adresse1', 'legerant1', 'lenom1', 'leprenom1', 'indicatif', 'letelephone1', 'lemail1', 'etat_vendeur', 'date_crea_vendeur', 'horaires', 'equipes', 'uid1', 'nb_unite', 'image'],
                        [$id_pro, $type_vendeur, $mdp_vendeur, $description_vendeur, $nomsociete, $statut, $immatriculation, $adresse, $legerant, $lenom, $leprenom, $indicatif, $telephone, $email, $etat, $date_creation, $horaires, $equipes, $uid, $nb_unite, $imagePath], 
                        'id_vendeur = ?', 
                        [$id]
                    );
                
                    echo json_encode(['success' => true]);
                    exit;
                
            } else {
        
 
                try {
                    $image = $_FILES['image'];
                    $id_pro = $_POST['id_pro'];
                    $type_vendeur = $_POST['type_vendeur'];
                    $mdp_vendeur = $_POST['mdp_vendeur'];
                    $description_vendeur = $_POST['description_vendeur'];
                    $nomsociete = $_POST['nomsociete'];
                    $statut = $_POST['statut'];
                    $immatriculation = $_POST['immatriculation'];
                    $adresse = $_POST['adresse'];
                    $legerant = $_POST['legerant'];
                    $lenom = $_POST['lenom'];
                    $leprenom = $_POST['leprenom'];
                    $indicatif = $_POST['indicatif'];
                    $telephone = $_POST['telephone'];
                    $email = $_POST['email'];
                    $etat = $_POST['etat'];
                    $date_creation = date('Y-m-d H:i:s');
                    $horaires = $_POST['horaires'];
                    $equipes = $_POST['equipes'];
                    $uid = $_POST['uid'];
                    $nb_unite = $_POST['nb_unite'];
                    $uploadDir = 'uploads/';
            
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
            
                    $image = $_FILES['image'];
            
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            
                    if (!in_array($image['type'], $allowedTypes)) {
                        http_response_code(400);
                        echo json_encode([
                            'success' => false,
                            'message' => 'Type de fichier non autorisé. Seuls JPEG, PNG et GIF sont autorisés.',
                            'data' => null,
                            'timestamp' => date('c')
                        ]);
                        exit;
                    }
                    $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
            
                    $imageNewName = uniqid('img_') . '.' . $imageExtension;
            
                    $imagePath = $uploadDir . $imageNewName;
            
                    move_uploaded_file($image['tmp_name'], $imagePath);
            

                    
                    $operations->insertNewRow(
                        'myclean_vendeur',
                        ['id_pro', 'type_vendeur', 'mdp_vendeur', 'description_vendeur', 'nomsociete1', 'statut1', 'immatriculation1', 'adresse1', 'legerant1', 'lenom1', 'leprenom1', 'indicatif', 'letelephone1', 'lemail1', 'etat_vendeur', 'date_crea_vendeur', 'horaires', 'equipes', 'uid1', 'nb_unite', 'image'],
                        [$id_pro, $type_vendeur, $mdp_vendeur, $description_vendeur, $nomsociete, $statut, $immatriculation, $adresse, $legerant, $lenom, $leprenom, $indicatif, $telephone, $email, $etat, $date_creation, $horaires, $equipes, $uid, $nb_unite, $imagePath]
                    );
                    http_response_code(200);
                    $response = [
                        'success' => true,
                        'message' => 'Données ajoutées avec succès',
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
                    break;
                } catch (\Throwable $e) {
                    http_response_code(500);
                    $response = [
                        'success' => false,
                        'message' => $e->getMessage(),
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
                    break;
                }            }
           
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
