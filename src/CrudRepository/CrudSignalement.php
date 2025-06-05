<?php

namespace Application\CrudRepository;

use Application\Lib\DatabaseConnection;

class CrudSignalement extends CrudRequests
{

    public function getSignalements(): array

    {
        $query = "SELECT
                        an.libelle_annonce AS annonce,
                        an.prix_annonce AS prix,
                        s.id_signalement AS id_signalement,
                        s.id_annonce AS id_annonce,
                        s.nom AS nom,
                        s.email AS email,
                        s.telephone AS telephone,
                        s.message AS message,
                        s.motif AS motif,
                        s.etat_contact AS etat_contact,
                        s.date_crea AS date_crea
                        
                    FROM 
                        laclef_signalement s
                    JOIN 
                        laclef_annonce an
                    ON 
                        s.id_annonce = an.id_annonce
                    
                    ORDER BY 
                        s.id_signalement ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteSignalement(int $id): int
    {
       return  $this->deleteItem('laclef_signalement', 'id_signalement'  , $id);
    }
}