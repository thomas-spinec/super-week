<?php

namespace App\Model;

class BookModel extends AbstractModel
{
    protected ?\PDO $bdd;
    protected string $table = 'book';

    public function insert(string $title, string $content, int $auteurId)
    {
        $req = $this->bdd->prepare('INSERT INTO book (title, content, id_user) VALUES (:title, :content, :auteur_id)');
        $req->execute([
            'title' => $title,
            'content' => $content,
            'auteur_id' => $auteurId
        ]);
    }
}
