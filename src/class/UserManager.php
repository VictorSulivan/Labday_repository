<?php

class UserManager {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function insert(User $user) {


        $stmh = $this->db->prepare('INSERT INTO user(nom, prenom, deuxieme_prenom, role, adresse_domicile, date_de_naissance, telephone, status_marital, status_vital,  numero_secu_social, email, password) VALUES(?, ?, ?, role, ?, ?Created_AT, ?, ?, ?, ?, ?, ?)');
        $stmh->execute([
            $user->nom, $user->prenom, $user->deuxieme_prenom, $user->role, $user->role, $user->adresse_domicile, $user->date_de_naissance, $user->telephone, $user->status_vital, $user->numero_secu_social, $user->email,  $user->password
        ]);
        
        return $this->db->lastInsertId();
    }

    public function getByEmail($email) {
        $stmh = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $stmh->execute([$email]);
        $stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmh->fetch();
        return $user;
    }

    public function getById($id) {
        $stmh = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $stmh->execute([$id]);
        $stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmh->fetch();
        return $user;
    }

}

