<?php

class User {

    public $id;
    public $nom;
    public $prenom;
    public $password;
    public $role;
    public $created_at;
    public $deuxieme_prenom;
    public $adresse_domicile;
    public $date_de_naissance;
    public $telephone;
    public $status_marital;
    public $status_vital;
    public $numero_secu_social;
    public $email;
    

    public static function create($nom, $prenom, $email, $password, $role, $status_vital, $adresse_domicile, $status_marital, $numero_secu_social, $deuxieme_prenom, $date_de_naissance, $telephone ) {
        $user = new User();
        $user->nom = $nom;
        $user->prenom = $prenom;
        $user->email = $email;
        $user->password = hash('sha256', $password);
        $user->role = $role;
        $user->status_vital = $status_vital;
        $user->adresse_domicile = $adresse_domicile;
        $user->status_marital = $status_marital;
        $user->numero_secu_social = $numero_secu_social;
        $user->deuxieme_prenom = $deuxieme_prenom;
        $user->date_de_naissance = $date_de_naissance;
        $user->telephone = $telephone;
        return $user;
    }

    public function verifyPassword($password) {
        $hashPassword = hash('sha256', $password);
        return ($hashPassword === $this->password);
    }

    public function getCreatedAt() {
        $date = new DateTime($this->created_at);
        return $date->format('d/m/Y H:i:s');
    }

}