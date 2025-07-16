<?php
require_once '../vendor/autoload.php'; 
use Application\CrudRepository\CrudRequests;
session_start();
$operations = new CrudRequests(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addAnnonce'])) {
        $uid = $_POST['uid'];
        $libelle = $_POST['libelle'];
        $uploadDir = 'uploads/';
        $imagePath = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $uploadDir . uniqid() . '_' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            $image = $imagePath;
        }
        $description = $_POST['description'];
        $titre_transaction = $_POST['titre_transaction'];
        $prix = $_POST['prix'];
        $categorie = $_POST['categorie'];
        $vendeur = $_POST['vendeur'];
        $vendeur_type = $_POST['vendeur_type'];
        $date_crea = date('Y-m-d H:i:s');
        $etat = $_POST['etat'];
        $token = $_POST['token'];
        $surfacebien = $_POST['surfacebien'];
        $nbpiece = $_POST['nbpiece'];
        $nbchambre = $_POST['nbChambre'];
        $nbtoilette = $_POST['nbToilette'];
        $meuble = $_POST['meuble'];
        $nbplace = $_POST['nbplace'];
        $isexclu = $_POST['isexclu'];
        $terasse = $_POST['terasse'];
        $balcon = $_POST['balcon'];
        $neuf = $_POST['neuf'];
        $garage = $_POST['garage'];
        $cave = $_POST['cave'];
        $handicape = $_POST['handicape'];
        $montanthonoraire = $_POST['montanthonoraire'];
        $loyersanscharges = $_POST['loyersanscharges'];
        $charges = $_POST['charges'];
        $montanttotal = $_POST['montanttotal'];
        $prixgarantie = $_POST['prixgarantie'];
        $moisgarantie = $_POST['moisgarantie'];
        $descrgarantie = $_POST['descrGarantie'];
        $descrbien = $_POST['descrBien'];
        $adressebien = $_POST['adresseBien'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $pseudo = $_POST['pseudo'];
        $numero = $_POST['numero'];
        $zone = $_POST['zone'];
        $commune = $_POST['commune'];
        $ville = $_POST['ville'];
        $ispro = $_POST['ispro'];
        $typebien = $_POST['typebien'];
        $surfaceterrain = $_POST['surfaceTerrain'];
        $anneedubien = $_POST['anneeDuBien'];
        $titrevideo = $_POST['titreVideo'];
        $taillevideo = $_POST['tailleVideo'];
        $formatvideo = $_POST['formatVideo'];
        $lienvideo = $_POST['lienVideo'];
        $nbsallebain = $_POST['nbSalleDeBain'];

        try {
            $operations->insertNewRow('myclean_annonce', ['uid', 'libelle_annonce', 'image_annonce_1', 'description_annonce', 'titre_transaction', 'prix_annonce', 'categorie_annonce', 'vendeur_annonce', 'vendeur_type', 'date_crea_annonce', 'etat_annonce', 'token', 'surfacebien', 'nbpiece', 'nbChambre', 'nbsallebain', 'nbToilette', 'meuble', 'nbplace', 'isexclu', 'terasse', 'balcon', 'neuf', 'garage', 'cave', 'handicape', 'montanthonoraire', 'loyersanscharges', 'charges', 'montanttotal', 'prixgarantie', 'moisgarantie', 'descriptiongarantie', 'descriptionbien', 'adressebien', 'longitude', 'latitude', 'nompseudo', 'numerotel', 'zonebien', 'communebien', 'villebien', 'ispro', 'typebien', 'surfaceterrain', 'anneedubien', 'titrevideo', 'sizevideo', 'formatvideo', 'lienvideo'], [ $uid, $libelle, $image, $description, $titre_transaction, $prix, $categorie, $vendeur, $vendeur_type, $date_crea, $etat, $token, $surfacebien, $nbpiece, $nbchambre, $nbsallebain, $nbtoilette, $meuble, $nbplace, $isexclu, $terasse, $balcon, $neuf, $garage, $cave, $handicape, $montanthonoraire, $loyersanscharges, $charges, $montanttotal, $prixgarantie, $moisgarantie, $descrgarantie, $descrbien, $adressebien, $longitude, $latitude, $pseudo, $numero, $zone, $commune, $ville, $ispro, $typebien, $surfaceterrain, $anneedubien, $titrevideo, $taillevideo, $formatvideo, $lienvideo]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données inserées avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Annonce added successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to add annonce: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../annonce');
        exit();
    }
    if (isset($_POST['editAnnonce'])) {
        $id = $_POST['id2'];
       $uid = $_POST['uid2'];
       $libelle = $_POST['libelle2'];
       $image = $_POST['image2'];
       $description = $_POST['description2'];
       $titre_transaction = $_POST['titre_transaction2'];
       $prix = $_POST['prix2'];
       $categorie = $_POST['categorie2'];
       $vendeur = $_POST['vendeur2'];
       $vendeur_type = $_POST['vendeur_type2'];
       $date_crea = $_POST['date_crea2'];
       $etat = $_POST['etat2'];
       $token = $_POST['token2'];
       $surfacebien = $_POST['surfacebien2'];
       $nbpiece = $_POST['nbpiece2'];
       $nbchambre = $_POST['nbChambre2'];
       $nbtoilette = $_POST['nbToilette2'];
       $meuble = $_POST['meuble2'];
       $nbplace = $_POST['nbplace2'];
       $isexclu = $_POST['isexclu2'];
       $terasse = $_POST['terasse2'];
       $balcon = $_POST['balcon2'];
       $neuf = $_POST['neuf2'];
       $garage = $_POST['garage2'];
       $cave = $_POST['cave2'];
       $handicape = $_POST['handicape2'];
       $montanthonoraire = $_POST['montanthonoraire2'];
       $loyersanscharges = $_POST['loyersanscharges2'];
       $charges = $_POST['charges2'];
       $montanttotal = $_POST['montanttotal2'];
       $prixgarantie = $_POST['prixgarantie2'];
       $moisgarantie = $_POST['moisgarantie2'];
       $descrgarantie = $_POST['descrGarantie2'];
       $descrbien = $_POST['descrBien2'];
       $adressebien = $_POST['adresseBien2'];
       $longitude = $_POST['longitude2'];
       $latitude = $_POST['latitude2'];
       $pseudo = $_POST['pseudo2'];
       $numero = $_POST['numero2'];
       $zone = $_POST['zone2'];
       $commune = $_POST['commune2'];
       $ville = $_POST['ville2'];
       $ispro = $_POST['ispro2'];
       $typebien = $_POST['typebien2'];
       $surfaceterrain = $_POST['surfaceTerrain2'];
       $anneedubien = $_POST['anneeDuBien2'];
       $titrevideo = $_POST['titreVideo2'];
       $taillevideo = $_POST['tailleVideo2'];
       $formatvideo = $_POST['formatVideo2'];
       $lienvideo = $_POST['lienVideo2'];
       $nbsallebain = $_POST['nbSalleDeBain2'];
        try {
            $operations->updateRow('myclean_annonce', ['uid', 'libelle_annonce', 'image_annonce_1', 'description_annonce', 'titre_transaction', 'prix_annonce', 'categorie_annonce', 'vendeur_annonce', 'vendeur_type', 'date_crea_annonce', 'etat_annonce', 'token', 'surfacebien', 'nbpiece', 'nbchambre', 'nbsallebain', 'nbtoilette', 'meuble', 'nbplace', 'isexclu', 'terasse', 'balcon', 'neuf', 'garage', 'cave', 'handicape', 'montanthonoraire', 'loyersanscharges', 'charges', 'montanttotal', 'prixgarantie', 'moisgarantie', 'descriptiongarantie', 'descriptionbien', 'adressebien', 'longitude', 'latitude', 'nompseudo', 'numerotel', 'zonebien', 'communebien', 'villebien', 'ispro', 'typebien', 'surfaceterrain', 'anneedubien', 'titrevideo', 'sizevideo', 'formatvideo', 'lienvideo'], [$uid, $libelle, $image, $description, $titre_transaction, $prix, $categorie, $vendeur, $vendeur_type, $date_crea, $etat, $token, $surfacebien, $nbpiece, $nbchambre, $nbsallebain, $nbtoilette, $meuble, $nbplace, $isexclu, $terasse, $balcon, $neuf, $garage, $cave, $handicape, $montanthonoraire, $loyersanscharges, $charges, $montanttotal, $prixgarantie, $moisgarantie, $descrgarantie, $descrbien, $adressebien, $longitude, $latitude, $pseudo, $numero, $zone, $commune, $ville, $ispro, $typebien, $surfaceterrain, $anneedubien, $titrevideo, $taillevideo, $formatvideo, $lienvideo], 'id_annonce = ?', [$id]);
            http_response_code(200);
            $response = [
                    'success' => true,
                    'message' => 'données mises à jour avec succes',
                    'data' => null,
                    'timestamp' => date('c')
                ];
                $_SESSION['message'] = "Annonce updated successfully";
                $_SESSION['message_type'] = 'success';
                echo json_encode($response);
        } catch (\Throwable $e) {
            $_SESSION['message'] = "Failed to update annonce: " . $e->getMessage();
            $_SESSION['message_type'] = 'danger';
            throw new Exception($e->getMessage(),500);
        }
        header('Location: ../annonce');
        exit();
    }
    if (isset($_POST['deleteAnnonce'])) {
        $id = $_POST['id_annonce'];
        try {
            $operations->deleteItem('myclean_annonce', 'id_annonce', $id);
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
        header('Location: ../annonce');
        exit();
    }

    if (!isset($_POST['id']) || $_POST['id'] <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'ID invalide']);
            exit;
        }
        $id = (int)$_POST['id'];
        $sql = "SELECT id_annonce AS id, uid AS uid, 
        libelle_annonce AS libelle, 
        image_annonce_1 AS image, 
        description_annonce AS description, 
        titre_transaction AS titre_transaction, 
        prix_annonce AS prix, 
        categorie_annonce AS categorie, 
        vendeur_annonce AS vendeur, 
        vendeur_type AS vendeur_type, 
        date_crea_annonce AS date_crea, 
        etat_annonce AS etat, 
        token AS token, 
        surfacebien AS surfacebien, 
        nbpiece AS nbpiece, 
        nbchambre AS nbChambre, 
        nbsallebain AS nbSalleDeBain, 
        nbtoilette AS nbToilette, 
        meuble AS meuble, 
        nbplace AS nbplace, 
        isexclu AS isexclu, 
        Terasse AS terasse, 
        balcon AS balcon, 
        neuf AS neuf, 
        garage AS garage, 
        cave AS cave, 
        handicape AS handicape, 
        montanthonoraire AS montanthonoraire, 
        loyersanscharges AS loyersanscharges, 
        charges AS charges, 
        montanttotal AS montanttotal, 
        prixgarantie AS prixgarantie, 
        moisgarantie AS moisgarantie, 
        descriptiongarantie AS descriptionGarantie, 
        descriptionbien AS descrBien, 
        adressebien AS adresseBien, 
        longitude AS longitude, 
        latitude AS latitude, 
        nompseudo AS pseudo, 
        numerotel AS numero, 
        zonebien AS zone, 
        communebien AS commune, 
        villebien AS ville, 
        ispro AS ispro, 
        typebien AS typebien, 
        surfaceterrain AS surfaceTerrain, 
        anneedubien AS anneeDuBien, 
        titrevideo AS titreVideo, 
        sizevideo AS tailleVideo, 
        formatvideo AS formatVideo, 
        lienvideo AS lienVideo from myclean_annonce where id_annonce = ?;";
        $stmt = $operations->connection->prepare($sql);
        $stmt->execute([$id]);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        http_response_code(200);
        $response = [
            'success' => true,
            'message' => 'données récupérées avec succes',
            'data' => $success,
            'timestamp' => date('c')
        ];
        $_SESSION['message'] = "Annonce retrieved successfully";
        $_SESSION['message_type'] = 'success';
        echo json_encode($response);
    
}
