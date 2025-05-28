<?php

namespace Application\CrudRepository;

use Application\Lib\DatabaseConnection;
use PDO;
use PDOException;
use Exception;

class CrudRequests
{
    private DatabaseConnection $dbConnection;
    public PDO $connection;

    private $id;

    public function __construct()
    {
        try {
            $this->dbConnection = new DatabaseConnection();
            $this->connection = $this->dbConnection->getConnection();
        } catch (PDOException $e) {
            throw new Exception("Échec de la connexion à la base de données : " . $e->getMessage());
        }
    }

    /**
     * Retourne la liste des données d'un tableau avec jointure
     */


    public function getAllDefault(string $table , string $primary_key){
        {
            try {
                
                $query = "SELECT *
                        FROM 
                            $table t
                        ORDER BY 
                            t.$primary_key ASC";
    
                $stmt = $this->connection->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            } catch (PDOException $e) {
                throw new Exception("Erreur lors de la récupération des données : " . $e->getMessage());
            }
            
        }

    }
     public function getList(string $table): array
    {
        try {
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
                        $table a
                    JOIN 
                        laclef_client c ON a.id_client = c.id_client
                    ORDER BY 
                        a.id_abonnement ASC";

            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la récupération des données : " . $e->getMessage());
        }
    }

    /**
     * Supprime un élément d'une table
     */
    public function deleteItem(string $table, string $table_id, int $item_id): int
    {
        try {
            $query = "DELETE FROM $table WHERE $table_id = :id";
            $stmt = $this->connection->prepare($query);
            $success = $stmt->execute([':id' => $item_id]);

            return $success ? 200 : 500;
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la suppression : " . $e->getMessage());
        }
    }


    public function insertNewRow(string $table, array $table_fields, array $records)
    {
            $columns = implode('`, `', $table_fields);
        
        $placeholders = rtrim(str_repeat('?, ', count($records)), ', ');
    
        $sql = "INSERT INTO `$table` (`$columns`) VALUES ($placeholders)";
        
        $stmt = $this->connection->prepare($sql);
        $success = $stmt->execute(array_values($records)); 
    
        return $success;
    }


    public function updateRow(string $table, array $fields, array $values, string $whereClause, array $whereParams = []) {
        try {

                        $setClause = implode(', ', array_map(fn($f) => "`$f` = ?", $fields));

                        $sql = "UPDATE `$table` SET $setClause WHERE $whereClause";

                        $allParams = array_merge(array_values($values), $whereParams);

                        $stmt = $this->connection->prepare($sql);
                        $success = $stmt->execute($allParams);

                        return $success;
                        
                    } catch (\Throwable $th) {
                        throw new Exception("Erreur lors de la mise à jour : " . $th->getMessage());
                    }
    }

                    public function getItemById($table, $table_id, $item_id) {
                        try {
                            if (session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }
                    
                            $query = "SELECT * FROM $table WHERE $table_id = :item_id";
                            $stmt = $this->connection->prepare($query);
                            $stmt->execute([':item_id' => $item_id]);
                    
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            return $result;            
                    
                        } catch (\Throwable $th) {
                            throw new Exception("Erreur lors de la récupération des données : " . $th->getMessage());
                        }
                    }
                    

    public function getItemId(){
        return $this->id;
    }

    
}

