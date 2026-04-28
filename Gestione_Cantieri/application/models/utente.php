<?php
namespace models;
use Illuminate\Database\Eloquent\Model;
class Utente extends Model {
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

}