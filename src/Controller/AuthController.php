<?php

namespace App\Controller;

use App\Model\UserModel;

class AuthController
{
    public function register()
    {
        // initialisation des erreurs
        $errors = [];

        // récupération des données
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname = htmlspecialchars(trim($_POST['lastname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        $password_confirm = $_POST['password_confirm'];

        // vérification des champs

        // vérification du prénom
        if (empty($firstname)) {
            $errors[] = 'Le prénom est obligatoire';
        }

        // vérification du nom
        if (empty($lastname)) {
            $errors[] = 'Le nom est obligatoire';
        }

        // vérification de l'email
        if (empty($email)) {
            $errors[] = 'L\'email est obligatoire';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L\'email n\'est pas valide';
        } else {
            // vérification que l'email n'existe pas déjà
            $userModel = new UserModel();
            $user = $userModel->verifyEmail($email);
            if ($user) {
                $errors[] = 'L\'email existe déjà';
            }
        }

        // vérification du mot de passe
        if (empty($password)) {
            $errors[] = 'Le mot de passe est obligatoire';
        } elseif ($password != $password_confirm) {
            $errors[] = 'Les mots de passe ne sont pas identiques';
        }

        // si il n'y a pas d'erreurs
        if (empty($errors)) {
            // insertion en bdd
            $userModel = new UserModel();
            $response = $userModel->createUser([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ]);
            if ($response) {
                // redirection vers la page de connexion
                header('Location: /super-week/login');
            } else {
                $errors[] = 'Erreur lors de l\'inscription';
                // affichage des erreurs
                require 'src/View/register.php';
            }
        } else {
            // affichage des erreurs
            require 'src/View/register.php';
        }
    }
}