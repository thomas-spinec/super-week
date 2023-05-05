<?php
session_start();
// use AltoRouter;
use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\HomeController;
use App\Controller\UserController;

require 'vendor/autoload.php';


$router = new AltoRouter();
$router->setBasePath('/super-week');


// map homepage
// $router->map('GET', '/', function () {
//     echo "<h1>Bienvenu sur l’accueil</h1>";
// }, 'home');

$router->addRoutes([
    // map homepage ----------------------------------------------------
    ['GET', '/', function () {
        $homeController = new HomeController();
        $homeController->displayHome();
    }, 'home'],
    // map users details page ------------------------------------------
    ['GET', '/users', function () {
        $userController = new UserController();
        $userController->list();
    }, 'users'],
    // map 1 user details ----------------------------------------------
    ['GET', '/users/[i:id]', function ($id) {
        $userController = new UserController();
        $userController->details($id);
    }, 'user'],
    // map fill bdd user -----------------------------------------------
    ['GET', '/users/fill', function () {
        $userController = new UserController();
        $userController->fill();
    }, 'user-fill'],
    // map display register --------------------------------------------
    ['GET', '/register', function () {
        $authController = new AuthController();
        $authController->displayRegisterForm();
    }, 'display_register'],
    // map register ----------------------------------------------------
    ['POST', '/register', function () {
        $authController = new AuthController();
        $authController->register();
    }, 'register'],
    // map display login -----------------------------------------------
    ['GET', '/login', function () {
        $authController = new AuthController();
        $authController->displayLoginForm();
    }, 'display_login'],
    // map login -------------------------------------------------------
    ['POST', '/login', function () {
        $authController = new AuthController();
        $authController->login();
    }, 'login'],
    // map logout ------------------------------------------------------
    ['GET', '/logout', function () {
        $authController = new AuthController();
        $authController->logout();
    }, 'logout'],
    // map display book form -------------------------------------------
    ['GET', '/books/write', function () {
        $bookController = new BookController();
        $bookController->displayBookForm();
    }, 'display_book_form'],
    // map add book ----------------------------------------------------
    ['POST', '/books/write', function () {
        $bookController = new BookController();
        $bookController->addBook();
    }, 'add_book'],
    // map list books --------------------------------------------------
    ['GET', '/books', function () {
        $bookController = new BookController();
        $bookController->list();
    }, 'books'],
    // map 1 book details ----------------------------------------------
    ['GET', '/books/[i:id]', function ($id) {
        $bookController = new BookController();
        $bookController->details($id);
    }, 'book'],
]);


// match
$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
