<?php


use models\Utente;

class Home
{
    private Utente $userModel;

    public function __construct()
    {
        $this->userModel = new Utente();
        session_start();
    }

    public function index() {
        if (isset($_SESSION['utente'])) {
            header("Location:". URL."Admin");
            exit;
        }
        require 'application/views/home.php';
    }


}
