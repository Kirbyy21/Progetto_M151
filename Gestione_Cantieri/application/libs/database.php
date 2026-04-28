<?php

class Database {

    public function connect() {

        try {
            $conn = new PDO(
                "mysql:host=".HOST.";dbname=".DATABASE,
                USERNAME,
                PASSWORD
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch(PDOException $e) {
            echo "Errore connessione: " . $e->getMessage();
        }
    }
}


/*
Dentro un model es Cantiere.php

require_once "../config/database.php";

class Cantiere {

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

}
*/