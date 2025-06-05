<?php

namespace Application\CrudRepository;

use Application\Lib\DatabaseConnection;

class CrudCommune extends CrudRequests
{
    //private DatabaseConnection $dbConnection;
    //private $connection;



    public function getCommunes(): array
    {
        $query = "SELECT 
                        c.id_commune AS id_commune,
                        c.libelle_commune AS libelle_commune,
                        v.libelle_ville AS nom_ville,
                        v.id_ville
                    FROM 
                        laclef_commune c
                    JOIN 
                        laclef_ville v ON c.id_ville = v.id_ville
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
       return  $this->deleteItem('laclef_commune', 'id_commune'  , $id);
    }
}