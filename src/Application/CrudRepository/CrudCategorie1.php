<?php

namespace Application\CrudRepository;


class CrudCategorie1 extends CrudRequests
{

    public function getCategorie1(): array
    {


        $query = "SELECT 
                    c1.id_categorie1 AS id,
                    c1.id_categorie AS id_categorie,
                    c1.libelle_categorie1 AS libelle_categorie1,
                    c1.description_categorie1 AS description_categorie1,
                    c1.image_categorie1 AS image_categorie1,
                    c1.image_categorie11 AS image_categorie11,
                    c1.particulier AS particulier,
                    c1.pro AS pro,
                    c.id_categorie AS id_categorie,
                    c.libelle_categorie AS libelle_categorie
        
                    FROM 
                        myclean_categorie1 c1
                    LEFT JOIN 
                        myclean_categorie c ON c1.id_categorie = c.id_categorie
                    ORDER BY 
                        c1.id_categorie1 ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteCategorie1(int $id): int
    {
       return  $this->deleteItem('myclean_categorie1', 'id_categorie1'  , $id);
    }
}