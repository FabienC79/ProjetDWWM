<?php

namespace Models;

class Connexion
{
    // Parametres de connexion pour se connecter à la base de données de Laragon
    const SERVER_NAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = "db_cdp";

    private static ?Connexion $instance = null;
    private ?\PDO $connexion = null;

    private function __construct()
    {
        $this->connexion = new \PDO(
            "mysql:host=" . self::SERVER_NAME . ";dbname=" . self::DB_NAME,
            self::USERNAME,
            self::PASSWORD
        );
        $this->connexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->connexion->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    private static function getInstance(): Connexion
    {
        if (self::$instance === null) {
            self::$instance = new Connexion();
        }
        return self::$instance;
    }

    public function getConnexion(): \PDO
    {
        return $this->connexion;
    }

}