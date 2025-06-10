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
        $success = $operations->deleteItem('laclef_annonce', 'id_annonce', $id);
        http_response_code(response_code: 200);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(),500);
        }
        break;

    case 'GET':
        try {
            $id = $_GET['id'] ?? null;
            if($id){
                $success = $operations->getItemById('laclef_annonce', 'id_annonce', $id);
                echo json_encode($success);
            }
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;

    case 'POST':
        try {
            $post_vars = file_get_contents("php://input");
            parse_str($post_vars, $post_vars);
            $libelle_annonce = $post_vars['libelle_annonce'] ?? null;
            $operations->insertNewRow('laclef_annonce', ['libelle_annonce'], [$libelle_annonce]);
            echo json_encode(['success' => true]);
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
                $etat = $put_vars['etat'] ?? null;
                $operations->updateRow(
                    'laclef_annonce', 
                    ['etat_annonce'], 
                    [$etat], 
                    'id_annonce = ?', 
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
