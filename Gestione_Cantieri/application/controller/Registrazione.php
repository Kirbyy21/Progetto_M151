<?php

require_once "./application/libs/database.php";
class Registrazione {

    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function register() {
        require_once './application/views/Registrazione.php';
    }

    public function tryRegister(String $name, String $email, String $password, int $ruolo) {
        $stmt = $this->conn->prepare("INSERT INTO utente (nome, email, password, ruolo, approvato, data_registrazione) VALUES (?, ?, ?, ?, FALSE, NOW())");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->bindParam(4, $ruolo);
        $stmt->execute();

        require_once "./application/views/login.php";
    }

}