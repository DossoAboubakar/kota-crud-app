<?php
session_start();
require_once '../vendor/autoload.php';
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addAddresse'])) {
        $addresse = $_POST['addresse'];
        $type = $_POST['type'];
        $client = $_POST['client'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $ville = $_POST['ville'];
        $secteur = $_POST['secteur'];
        $batiment = $_POST['batiment'];
        $numero = $_POST['numero'];
        $etat = $_POST['etat'];
        try {
            $operations->insertNewRow('myclean_adresse', ['lib_adresse', 'type_adresse', 'id_client', 'long_adresse', 'lat_adresse', 'city_adresse', 'area_adresse', 'building_adresse', 'number_adresse', 'etat_adresse'], [ $addresse, $type, $client, $longitude, $latitude, $ville, $secteur, $batiment, $numero, $etat]);
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
        header('Location: ../addresse');
        exit();
    }
    if (isset($_POST['editAdresse'])) {
        $id = $_POST['id2'];
        $addresse = $_POST['addresse2'];
        $type = $_POST['type2'];
        $client = $_POST['client2'];
        $longitude = $_POST['longitude2'];
        $latitude = $_POST['latitude2'];
        $ville = $_POST['ville2'];
        $secteur = $_POST['secteur2'];
        $batiment = $_POST['batiment2'];
        $numero = $_POST['numero2'];
        $etat = $_POST['etat2'];
        try {
            $operations->updateRow('myclean_adresse', ['lib_adresse', 'type_adresse', 'id_client', 'long_adresse', 'lat_adresse', 'city_adresse', 'area_adresse', 'building_adresse', 'number_adresse', 'etat_adresse'], [$addresse, $type, $client, $longitude, $latitude, $ville, $secteur, $batiment, $numero, $etat], 'id_adresse = ?', [$id]);
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
        header('Location: ../addresse');
        exit();
    }
    if (isset($_POST['deleteAdresse'])) {
        $id = $_POST['id'];
        try {
            $operations->deleteItem('myclean_adresse', 'id_adresse', $id);
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
        header('Location: ../addresse');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT  a.id_adresse AS id,
                        a.lib_adresse AS addresse,
                        a.id_client AS id_client,
                        a.type_adresse AS type,
                        a.long_adresse AS longitude,
                        a.lat_adresse AS latitude,
                        a.city_adresse AS ville,
                        a.area_adresse AS secteur,
                        a.building_adresse AS batiment,
                        a.number_adresse AS numero,
                        a.etat_adresse AS etat
                    FROM 
                        myclean_adresse a
                    WHERE 
                        a.id_adresse = ?";
        $statement = $operations->connection->prepare($sql);
        $statement->execute([$id]);
        $success = $statement->fetchAll(\PDO::FETCH_ASSOC);

        http_response_code(200);
        $response = [
            'data' => $success[0],
        ];
        echo json_encode($response);
    
}
