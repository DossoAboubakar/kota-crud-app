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
                $this->database = new \PDO('mysql:host=polyclinairesto1.mysql.db;dbname=polyclinairesto1;charset=utf8', 'polyclinairesto1', 'Caroline6051');
            }
            return $this->database;
        } catch (\Throwable $e) {
            throw new PDOException("Echec de connexion à la base de données: $e", 500);
        }

    }


}



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