<?php
require_once "./application/libs/database.php";
class Cantiere {

    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function show() {
        $stmt = $this->conn->prepare("SELECT c.id, c.via, c.cap, c.paese, c.tipologia, c.n_operai, c.data_inizio, c.data_fine, c.valutazione, GROUP_CONCAT(f.nome) AS foto 
                                            FROM cantiere c JOIN foto f 
                                            ON c.id = f.id_cantiere
                                            GROUP BY c.id;");
        $stmt->execute();
        $worksites = $stmt->fetchAll(PDO::FETCH_ASSOC);;

        require 'application/views/cantieri.php';
    }

    public function showDetails($id) {
        $stmt = $this->conn->prepare("SELECT c.id, c.via, c.cap, c.paese, c.tipologia, c.n_operai, c.data_inizio, c.data_fine, c.valutazione, GROUP_CONCAT(f.nome) AS foto 
                                            FROM cantiere c JOIN foto f 
                                            ON c.id = f.id_cantiere
                                            WHERE c.id = :id
                                            GROUP BY c.id;");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $worksite = $stmt->fetch(PDO::FETCH_ASSOC);;

        require 'application/views/dettaglio_cantiere.php';
    }

    // Fix
    public  function search($street, $cap, $town, $tipology, $workers, $rating) {
        $street = $_POST['street'] ?? '';
        $cap = $_POST['cap'] ?? '';
        $town = $_POST['town'] ?? '';
        $tipology = $_POST['view1'] ?? '';
        $workers = $_POST['n'] ?? '';
        $rating = $_POST['rating'] ?? '';

        $stmt = $this->conn->prepare("SELECT c.id, c.via, c.cap, c.paese, c.tipologia, c.n_operai, c.data_inizio, c.data_fine, c.valutazione, GROUP_CONCAT(f.nome) AS foto 
                                            FROM cantiere c JOIN foto f 
                                            ON c.id = f.id_cantiere
                                            GROUP BY c.id;");
        $stmt->execute();
        $worksites = $stmt->fetchAll(PDO::FETCH_ASSOC);;

        require 'application/views/cantieri.php';
    }

    public function add() {

    }





}

