<?php

namespace Application\CrudRepository;

class CrudAddresse extends CrudRequests
{
    public function getAddresses(): array
    {
        $query = "SELECT 
                        a.id_adresse AS id,
                        a.lib_adresse AS addresse,
                        a.id_client AS id_client,
                        a.type_adresse AS type,
                        a.long_adresse AS longitude,
                        a.lat_adresse AS latitude,
                        a.city_adresse AS ville,
                        a.area_adresse AS secteur,
                        a.building_adresse AS batiment,
                        a.number_adresse AS numero,
                        a.etat_adresse AS etat, 
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS telephone
                    FROM 
                        myclean_adresse a
                    LEFT JOIN 
                        myclean_client c ON a.id_client = c.id_client
                    ORDER BY 
                        a.id_adresse ASC";

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getItemById($table = null, $table_id = null, $item_id = null): array
    {
        if ($item_id === null) {
            throw new \InvalidArgumentException('Item ID is required');
        }

        $query = "SELECT 
                        a.id_adresse AS id,
                        a.lib_adresse AS addresse,
                        a.id_client AS id_client,
                        a.type_adresse AS type,
                        a.long_adresse AS longitude,
                        a.lat_adresse AS latitude,
                        a.city_adresse AS ville,
                        a.area_adresse AS secteur,
                        a.building_adresse AS batiment,
                        a.number_adresse AS numero,
                        a.etat_adresse AS etat, 
                        c.nom_client AS nom_client,
                        c.prenom_client AS prenom_client,
                        c.tel_client AS telephone
                    FROM 
                        myclean_adresse a
                    JOIN 
                        myclean_client c ON a.id_client = c.id_client
                    WHERE 
                        a.id_adresse = ?";

        $statement = $this->connection->prepare($query);
        $statement->execute([$item_id]);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deleteAddress(int $id): int
    {
        return $this->deleteItem('myclean_adresse', 'id_adresse', $id);


    }
}