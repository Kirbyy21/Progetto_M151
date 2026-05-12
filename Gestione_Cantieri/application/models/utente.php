<?php

class Utente {
    protected $table = 'utente';
    protected $primaryKey = 'email';
    public $incrementing = false;
    public $keyType = 'string';

    public function isValid(string $email, string $password): bool
    {
        $utente = Utente::where('email', $email)->first();

        if ($utente) {
            if (password_verify($password, $utente['password'])) {
                return true;
            }
        }

        return false;
    }

    public function get()
    {

    }

}