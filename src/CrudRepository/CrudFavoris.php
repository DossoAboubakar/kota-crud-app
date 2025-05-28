<?php

namespace Application\CrudRepository;


class CrudFavoris extends CrudRequests
{

    public function getFavoris(): array
    {
        $query = "SELECT 
                        f.id_favoris AS id_favoris,
                        a.prix_annonce AS prix_annonce,
                        a.id_annonce AS id_annonce,
                        a.libelle_annonce AS libelle_annonce,
                        c.id_client AS id_client,
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS tel_client,
                        f.date_ajout
                    FROM 
                        laclef_favoris f
                    JOIN 
                        laclef_client c ON f.id_user = c.id_client
                    JOIN 
                        laclef_annonce a ON f.id_annonce = a.id_annonce
                    ORDER BY 
                        f.id_favoris ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteFavoris(int $id): int
    {
       return  $this->deleteItem('laclef_favoris', 'id_favoris'  , $id);
    }
}