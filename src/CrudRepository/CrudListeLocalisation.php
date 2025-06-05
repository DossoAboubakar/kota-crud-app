<?php

namespace Application\CrudRepository;


class CrudFavoris extends CrudRequests
{

    public function getFavoris(): array
    {
        $query = "SELECT 
                        v.libelle_ville AS libelle_ville,
                        c.libelle_commune AS libelle_commune,
                        l.id_liste_localisation AS id_liste_localisation,
                        l.code_liste AS code_liste,
                        l.id_ville AS id_ville,
                        l.id_commune AS id_commune,
                        l.libelle_localisation AS libelle_localisation,
                        l.id_localisation AS id_localisation,
                        l.latitude AS latitude,
                        l.longitude AS longitude,
                        l.etat AS etat,
                        l.id_client AS id_client,
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS tel_client,
                    FROM 
                        laclef_liste_localisation l
                    JOIN 
                        laclef_client c ON l.id_client = c.id_client
                    JOIN 
                        laclef_ville v ON l.id_ville = v.id_ville
                    JOIN 
                        laclef_commune c ON l.id_commune = c.id_commune
                    ORDER BY 
                        l.id_liste_localisation ASC
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