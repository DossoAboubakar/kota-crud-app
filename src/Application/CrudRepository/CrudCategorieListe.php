<?php

namespace Application\CrudRepository;

use Application\CrudRepository\CrudRequests;

class CrudCategorieListe extends CrudRequests
{

    public function getCategorieListe(): array
    {
        $query = "SELECT 
                    csl.id_categorie_service_liste AS id,
                    csl.id_categorie AS id_categorie,
                    csl.id_categorie_service AS id_categorie_service,
                    csl.libelle_categorie_service_liste AS categorie_liste,
                    csl.description_categorie_service_liste AS description,
                    csl.img_categorie_service AS image,
                    csl.qte AS quantite,
                    csl.montant AS montant,
                    csl.prix AS prix,
                    csl.etat_categorie_service_liste AS etat,
                    c.libelle_categorie AS libelle_categorie,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                    cs.libelle_categorie_service AS libelle_categorie_service
                  FROM myclean_categorie_service_liste csl
                  LEFT JOIN myclean_categorie c 
                    ON csl.id_categorie = c.id_categorie 
                  LEFT JOIN myclean_categorie_service cs 
                    ON csl.id_categorie_service = cs.id_categorie_service
                  ORDER BY csl.id_categorie_service_liste ASC";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteCategorieListe(int $id): int
    {
       return  $this->deleteItem('myclean_categorie_service_liste', 'id_categorie_service_liste'  , $id);
    }

    public function getLibelleCategorieService(int $id): string
    {
        $query = "SELECT cs.libelle_categorie_service AS libelle_categorie_service 
                  FROM myclean_categorie_service cs
                  WHERE cs.id_categorie = ?";
        $statement = $this->connection->prepare($query);
        $statement->execute([$id]);
        $response = $statement->fetchColumn();
        return $response;
    }
 
}