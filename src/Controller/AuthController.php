<?php

namespace App\Controller;

use App\Model\UserModel;

class AuthController
{
    public function displayRegisterForm()
    {
        if (!isset($_SESSION['user'])) {
            require 'src/View/register.php';
        } else {
            header('Location: /super-week');
        }
    }

    public function displayLoginForm()
    {
        if (!isset($_SESSION['user'])) {
            require 'src/View/login.php';
        } else {
            header('Location: /super-week');
        }
    }

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
            $user = $userModel->findOneBy('email', $email);
            if ($user !== false) {
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

    public function login()
    {
        // initialisation des erreurs
        $errors = [];

        // récupération des données
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));

        // vérification des champs

        // vérification de l'email
        if (empty($email)) {
            $errors[] = 'L\'email est obligatoire';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L\'email n\'est pas valide';
        }

        // vérification du mot de passe
        if (empty($password)) {
            $errors[] = 'Le mot de passe est obligatoire';
        }

        // si il n'y a pas d'erreurs
        if (empty($errors)) {
            // vérification que l'email existe
            $userModel = new UserModel();
            $user = $userModel->findOneBy('email', $email);
            if ($user !== false) {
                // vérification du mot de passe
                if (password_verify($password, $user['password'])) {
                    // création de la session
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'firstname' => $user['first_name'],
                        'lastname' => $user['last_name'],
                        'email' => $user['email'],
                    ];
                    // redirection vers la page d'accueil
                    header('Location: /super-week/');
                } else {
                    $errors[] = 'Le mot de passe est incorrect';
                    // affichage des erreurs
                    require 'src/View/login.php';
                }
            } else {
                $errors[] = 'L\'email n\'existe pas';
                // affichage des erreurs
                require 'src/View/login.php';
            }
        } else {
            // affichage des erreurs
            require 'src/View/login.php';
        }
    }

    public function logout()
    {
        // suppression de la session
        session_destroy();
        // redirection vers la page d'accueil
        header('Location: /super-week/');
    }
}
