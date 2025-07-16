<?php

namespace Application\CrudRepository;

use Application\CrudRepository\CrudRequests;

class CrudCategorieService extends CrudRequests
{

    public function getCategorieService(): array
    {
        $query = "SELECT 
                    cs.id_categorie_service AS id,
                    cs.id_categorie AS id_categorie,
                    cs.libelle_categorie_service AS libelle_categorie_service,
                    cs.description_categorie_service AS description,
                    cs.img_categorie_service AS image,
                    cs.etat_categorie_service AS etat,
                    c.libelle_categorie AS categorie ,
                    c1.libelle_categorie1 AS categorie1                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                  FROM myclean_categorie_service cs
                  LEFT JOIN myclean_categorie c 
                    ON cs.id_categorie = c.id_categorie 
                  LEFT JOIN myclean_categorie1 c1 
                    ON cs.id_categorie1 = c1.id_categorie1 
                  ORDER BY cs.id_categorie_service ASC";
        $statement = $this->connection->prepare($query);
        $statement->execute();                                     
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteCategorieService(int $id): int
    {
       return  $this->deleteItem('myclean_categorie_service', 'id_categorie_service'  , $id);
    }

    public function getLibelleCategorieService(int $id): string
    {
        $query = "SELECT cs.libelle_categorie_service AS libelle_categorie_service 
                  FROM myclean_categorie_service cs
                  WHERE cs.id_categorie_service = ?";
        $statement = $this->connection->prepare($query);
        $statement->execute([$id]);
        $response = $statement->fetchColumn();
        return $response;
    }
 
}