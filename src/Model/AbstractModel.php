<?php

namespace App\Model;

abstract class AbstractModel
{
    protected ?\PDO $bdd;
    protected string $table;

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

    public function findAll(): array|false
    {
        $req = $this->bdd->prepare("SELECT * FROM $this->table");
        $req->execute();
        $results = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    public function findOneBy($colname, $value): array|false
    {
        $req = $this->bdd->prepare("SELECT * FROM $this->table WHERE $colname = :$colname");
        $req->execute([
            "$colname" => $value
        ]);
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
}
