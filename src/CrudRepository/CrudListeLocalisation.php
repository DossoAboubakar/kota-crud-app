<?php

namespace Application\CrudRepository;


class CrudListeLocalisation extends CrudRequests
{

    public function getListeLocalisation(): array
    {
        $query = "SELECT 
                        v.libelle_ville AS ville,
                        c.libelle_commune AS commune,
                        l.id_liste AS id,
                        l.code_liste AS code,
                        l.id_ville AS id_ville,
                        l.id_commune AS id_commune,
                        l.libelle_localisation AS libelle,
                        l.id_localisation AS identifiant,
                        l.id_zone AS id_zone,
                        l.libelle_zone AS zone,
                        l.latitude AS latitude,
                        l.longitude AS longitude,
                        l.etat AS etat
                    FROM 
                        laclef_liste_localisation l
                     LEFT JOIN 
                        laclef_ville v ON l.id_ville = v.id_ville
                     LEFT JOIN 
                        laclef_commune c ON l.id_commune = c.id_commune
                    ORDER BY 
                        l.id_liste ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteListeLocalisation(int $id): int
    {
       return  $this->deleteItem('laclef_liste_localisation', 'id_liste_localisation'  , $id);
    }
}