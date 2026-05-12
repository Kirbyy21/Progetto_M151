<?php
require_once "./application/libs/database.php";
class Login {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function login() {
        require 'application/views/login.php';
    }

    public function tryLogin() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $stmt = $this->conn->prepare("SELECT email, password FROM utente WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['email'];
            require_once "./application/views/profilo.php";
        }
        else {
            $_SESSION['mail'] = $email;
            $_SESSION['psswd'] = $password;
            $_SESSION['error'] = "Incorrect Password or Username";
            // Password in database cifrata https://onlinephp.io/password-hash
            //$_SESSION['error'] = $email." ".$password." - ".$user['email']." ".$user['password'];
            header("Location: /");
        }
        exit;
    }
}