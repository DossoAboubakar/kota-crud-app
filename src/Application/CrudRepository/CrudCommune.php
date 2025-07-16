<?php

namespace Application\CrudRepository;


class CrudCommune extends CrudRequests
{
    public function getCommunes(): array
    {
        $query = "SELECT 
                        c.id_commune AS id_commune,
                        c.libelle_commune AS libelle_commune,
                        c.long AS longitude,
                        c.lat AS latitude,
                        v.libelle_ville AS ville,
                        v.id_ville
                    FROM 
                        myclean_commune c
                    JOIN 
                        myclean_ville v ON c.id_ville = v.id_ville
                    ORDER BY 
                        c.id_commune ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteCommune(int $id): int
    {
       return  $this->deleteItem('myclean_commune', 'id_commune'  , $id);
    }
}