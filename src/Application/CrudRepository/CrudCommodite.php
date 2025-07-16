<?php

namespace Application\CrudRepository;


class CrudCommodite extends CrudRequests
{

    public function getCommodites(): array
    {
        $query = "SELECT 
                        c.id_commodites AS id,
                        t.id_typebien_detail AS id_type,
                        t.libelle_typebien_detail AS type,
                        c.id_commodites AS id_commodites,
                        c.libelle_commodites AS titre,
                        c.image_commodites AS image,
                        c.activeimage AS activeimage,
                        c.ispro AS ispro,
                        c.code_commodite AS code
                    FROM 
                        laclef_commodites c
                    JOIN 
                        laclef_typebien_detail t ON c.id_type = t.id_typebien_detail
                    ORDER BY 
                        c.id_commodites ASC
                    ";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function deleteCommodite(int $id): int
    {
       return  $this->deleteItem('laclef_commodites', 'id_commodites'  , $id);
    }
}