<?php

class Database {

    Private static $conn = null;

    public static function connect() {
        if (self::$conn == null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . HOST . ";dbname=" . DATABASE,
                    USERNAME,
                    PASSWORD
                );

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = self::$conn->prepare("USE ".DATABASE);
                $stmt->execute();
                return self::$conn;

            } catch (PDOException $e) {
                echo "Errore connessione: " . $e->getMessage();
            }
        }
        return self::$conn;
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