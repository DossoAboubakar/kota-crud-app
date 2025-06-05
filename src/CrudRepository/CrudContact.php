<?php

namespace Application\CrudRepository;

use Application\Lib\DatabaseConnection;

class CrudContact extends CrudRequests
{

    public function getContacts(): array
    {
        $query = "SELECT 
                        v.nomsociete1 AS agence,
                        v.immatriculation1 AS immatriculation,
                        v.adresse1 AS adresse,
                        
                        an.libelle_annonce AS annonce, 
                        an.prix_annonce AS prix ,
                        c.id_contacts AS id_contacts,
                        c.id_annonce AS id_annonce,
                        c.id_agence AS id_agence,
                        c.nom AS nom,
                        c.email AS email,
                        c.telephone AS telephone,
                        c.acheteur AS acheteur,
                        c.locataire AS locataire,
                        c.message AS message,
                        c.etat_contact AS etat_contact,
                        c.date_crea AS date_crea,
                        c.indicUser AS indicUser,
                        c.votrerecherche AS votrerecherche,
                        c.libvotrerecherche AS libvotrerecherche,
                        c.votretype AS votretype,
                        c.libvotretype AS libvotretype,
                        c.surfacebienmin AS surfacebienmin,
                        c.surfacebienmax AS surfacebienmax,
                        c.prixmin AS prixmin,
                        c.prixmax AS prixmax
                    FROM 
                        laclef_contacts c
                    JOIN 
                        laclef_annonce an ON c.id_annonce = an.id_annonce
                    JOIN 
                        laclef_vendeur v ON c.id_agence = v.id_vendeur
                    ORDER BY 
                        c.id_contacts ASC
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