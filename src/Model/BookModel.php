<?php

namespace App\Model;

class BookModel
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

    public function insert(string $title, string $content, int $auteurId)
    {
        $req = $this->bdd->prepare('INSERT INTO book (title, content, id_user) VALUES (:title, :content, :auteur_id)');
        $req->execute([
            'title' => $title,
            'content' => $content,
            'auteur_id' => $auteurId
        ]);
    }

    public function findAll()
    {
        $req = $this->bdd->prepare('SELECT * FROM book');
        $req->execute();
        $books = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $books;
    }
}
