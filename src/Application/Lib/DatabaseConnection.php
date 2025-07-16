<?php

namespace Application\Lib;

use PDOException;

/**
 * DataBase Classe configuration
 */
class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        try {
            if ($this->database === null) {
                $this->database = new \PDO('mysql:host=localhost:3306;dbname=MyClean;charset=utf8', 'root', 'root');
            }
            return $this->database;
        } catch (\Throwable $e) {
            throw new PDOException("Echec de connexion à la base de données: $e", 500);
        }

    }


}