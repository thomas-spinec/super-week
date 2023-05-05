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
        $bookModel = new BookModel();
        $books = $bookModel->findAll();
        echo json_encode($books);
    }
    public function details($id)
    {
        $bookModel = new BookModel();
        $book = $bookModel->findOneBy('id', $id);
        if (!$book) {
            echo json_encode(['error' => 'book not found']);
        } else {
            echo json_encode($book);
        }
    }
}
