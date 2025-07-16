<?php

namespace Application\CrudRepository;


class CrudImageAgence extends CrudRequests
{

    public function getImageAgence(): array
    {
        $query = "SELECT 
                        ia.id_image_annonce AS id_image_annonce,
                        ia.libelle_image AS libelle_image,
                        ia.date_crea AS date_crea,
                        c.id_client AS id_client,
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS tel_client,
                        a.id_annonce AS id_annonce,
                        a.libelle_annonce AS libelle_annonce,
                        a.prix_annonce AS prix_annonce
                        
                    FROM 
                        myclean_image_annonce ia
                    LEFT JOIN 
                        myclean_client c ON ia.id_user = c.id_client
                    LEFT JOIN 
                        myclean_annonce a ON ia.id_annonce = a.id_annonce
                    ORDER BY 
                        ia.id_image_annonce ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteImageAgence(int $id): int
    {
       return  $this->deleteItem('myclean_image_annonce', 'id_image_annonce'  , $id);
    }
}