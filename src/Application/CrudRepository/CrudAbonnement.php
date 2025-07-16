<?php

namespace Application\CrudRepository;

class CrudAbonnement extends CrudRequests
{
    public function getAbonnements(): array
    {
        $query = "SELECT 
                        a.id_abonnement AS id,
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS numero_client,
                        a.abn_1,
                        a.abn_2,
                        a.abn_3,
                        a.abn_4,
                        a.etat_abonnement
                    FROM 
                        laclef_abonnement a
                    JOIN 
                        laclef_client c ON a.id_client = c.id_client
                    ORDER BY 
                        a.id_abonnement ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteAbonnement(int $id): int
    {
       return  $this->deleteItem('laclef_abonnement', 'id_abonnement'  , $id);
    }
}