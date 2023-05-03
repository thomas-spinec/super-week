<?php
session_start();
// use AltoRouter;
use App\Controller\AuthController;
use App\Controller\UserController;

require 'vendor/autoload.php';


$router = new AltoRouter();
$router->setBasePath('/super-week');


// map homepage
// $router->map('GET', '/', function () {
//     echo "<h1>Bienvenu sur l’accueil</h1>";
// }, 'home');

$router->addRoutes(array(
    // map homepage ----------------------------------------------------
    array('GET', '/', function () {
        require 'src/View/home.php';
    }, 'home'),
    // map users details page ------------------------------------------
    array('GET', '/users', function () {
        $userController = new UserController();
        $userController->list();
    }, 'users'),
    // map 1 user details ----------------------------------------------
    array('GET', '/users/[i:id]', function ($id) {
        echo "<h1>Bienvenue sur la page de l'utilisateur $id</h1>";
    }, 'user'),
    // map fill bdd user -----------------------------------------------
    array('GET', '/users/fill', function () {
        $userController = new UserController();
        $userController->fill();
    }, 'user-fill'),
    // map display register --------------------------------------------
    array('GET', '/register', function () {
        $authController = new AuthController();
        $authController->displayRegisterForm();
    }, 'display_register'),
    // map register ----------------------------------------------------
    array('POST', '/register', function () {
        $authController = new AuthController();
        $authController->register();
    }, 'register'),
    // map display login -----------------------------------------------
    array('GET', '/login', function () {
        $authController = new AuthController();
        $authController->displayLoginForm();
    }, 'display_login'),
    // map login -------------------------------------------------------
    array('POST', '/login', function () {
        $authController = new AuthController();
        $authController->login();
    }, 'login'),
    // map logout ------------------------------------------------------
    array('GET', '/logout', function () {
        $authController = new AuthController();
        $authController->logout();
    }, 'logout'),
));


// match
$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
