<?php

namespace App\Model;


class UserModel extends AbstractModel
{
    protected ?\PDO $bdd;
    protected string $table = 'user';

    public function fillBdd(array $values)
    {
        $req = $this->bdd->prepare('INSERT INTO user (first_name, last_name, email, password) VALUES (:firstname, :lastname, :email, :password)');
        $req->execute($values);
    }

    public function createUser(array $values)
    {
        $req = $this->bdd->prepare('INSERT INTO user (first_name, last_name, email, password) VALUES (:firstname, :lastname, :email, :password)');
        $req->execute($values);

        return $req;
    }
}
