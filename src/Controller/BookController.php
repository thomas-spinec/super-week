<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController
{

    public function displayBookForm()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /super-week/login');
        } else {
            require 'src/View/book_form.php';
        }
    }

    public function addBook()
    {
        $error = [];
        $title = htmlspecialchars(trim($_POST['titre']));
        $content = htmlspecialchars(trim($_POST['content']));
        $auteurId = $_SESSION['user']['id'];

        // vérif
        if (empty($title) || empty($content)) {
            $error['empty'] = "Tous les champs doivent être remplis";
            require 'src/View/book_form.php';
        } else {
            // insertion en bdd
            $bookModel = new BookModel();
            $bookModel->insert($title, $content, $auteurId);
            header('Location: /super-week/');
        }
    }

    public function list()
    {
        echo "<h1>liste des livres</h1>";
    }
    public function details($id)
    {
        echo "<h1>details du livre $id</h1>";
    }
}
