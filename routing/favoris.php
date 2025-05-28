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
            $success = $operations->deleteItem('laclef_favoris', 'id_favoris', $id);
            http_response_code(response_code: 200);
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
            $sql= "SELECT 
                        f.id_favoris AS id_favoris,
                        a.prix_annonce AS prix_annonce,
                        a.id_annonce AS id_annonce,
                        a.libelle_annonce AS libelle_annonce,
                        c.id_client AS id_client,
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS tel_client,
                        f.date_ajout As date_ajouter
                    FROM 
                        laclef_favoris f
                    JOIN 
                        laclef_client c ON f.id_user = c.id_client
                    JOIN 
                        laclef_annonce a ON f.id_annonce = a.id_annonce
                    WHERE 
                        f.id_favoris = ?
                    ORDER BY 
                        f.id_favoris ASC
                    ";
            $statement = $operations->connection->prepare($sql);
            $statement->execute([$id]);
            $success = $statement->fetchAll(\PDO::FETCH_ASSOC);
            http_response_code(response_code: 200);
            $response = [
                'success' => true,
                'message' => 'données récupérées avec succes',
                'data' => $success,
                'timestamp' => date('c')
            ];
            echo json_encode($response);
            break;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage(),500);
        }

    case 'POST':
            try {
                $id_client = $_POST['id_client'];
                $id_annonce = $_POST['id_annonce'];
                $date_ajout = $_POST['date_ajout'];
                $operations->insertNewRow('laclef_favoris', ['id_user', 'id_annonce', 'date_ajout'], [$id_client, $id_annonce, $date_ajout]);
                http_response_code(response_code: 200);
                $response = [
                        'success' => true,
                        'message' => 'données inserées avec succes',
                        'data' => null,
                        'timestamp' => date('c')
                    ];
                    echo json_encode($response);
            } catch (\Throwable $e) {
                throw new Exception($e->getMessage(),500);
            }
            break;
        
    case 'PUT':
                try {
                    
                    $put_vars = file_get_contents("php://input");
                    parse_str($put_vars, $put_vars);
                    $id = $put_vars['id_favoris'] ?? null;
                    $id_client = $put_vars['id_client'] ?? null;
                    $id_annonce = $put_vars['id_annonce'] ?? null;
                    $date_ajout = $put_vars['date_ajout'] ?? null;
                    if (!$id || !$id_client || !$id_annonce) {
                        http_response_code(400);
                        echo json_encode([
                            'error' => 'Données manquantes',
                            'received_data' => $put_vars
                        ]);
                        exit;
                    }
                    
                    $operations->updateRow(
                        'laclef_favoris', 
                        ['id_user', 'id_annonce', 'date_ajout'], 
                        [$id_client, $id_annonce, $date_ajout], 
                        'id_favoris = ?', 
                        [$id]
                    );

                    http_response_code(200);
                    echo json_encode([
                        'success' => true,
                        'message' => 'données modifiées avec succes',
                        'data' => null,
                        'timestamp' => date('c')
                    ]);
                    
                } catch (\Throwable $e) {
                    throw new Exception($e->getMessage(),500);
                }
                break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Méthode non autorisée']);
        break;
}
