<?php

namespace App\Controller;

class BookController
{

    public function displayBookForm()
    {
        require 'src/View/book_form.php';
    }
    public function list()
    {
        echo "<h1>liste des livres</h1>";
    }
    public function details($id)
    {
        echo "<h1>details du livre $id</h1>";
    }
    public function fill()
    {
        echo "<h1>remplissage de la bdd</h1>";
    }
}
