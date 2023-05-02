<?php

namespace App\Model;


class UserModel
{
    private $bdd;

    public function __construct()
    {
        // connexion à la bdd
        // variables de connexion à la bdd
        $host = 'localhost';
        $dbname = 'super-week';
        $dbUser = 'root';
        $dbPass = '';

        try {
            $this->bdd = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUser, $dbPass);
            $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->bdd->exec("set names utf8");
        } catch (\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }

    public function findAll()
    {
        $req = $this->bdd->prepare('SELECT * FROM user');
        $req->execute();
        $users = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $users;
    }
}
