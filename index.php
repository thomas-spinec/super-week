<?php

use App\Controller\UserController;

require 'vendor/autoload.php';


$router = new AltoRouter();
$router->setBasePath('/super-week');


// map homepage
// $router->map('GET', '/', function () {
//     echo "<h1>Bienvenu sur l’accueil</h1>";
// }, 'home');

$router->addRoutes(array(
    // map homepage
    array('GET', '/', function () {
        echo "<h1>Bienvenue sur l’accueil</h1>";
    }, 'home'),
    // map users details page
    array('GET', '/users', function () {
        $userController = new UserController();
        $userController->list();
    }, 'users'),
    // map 1 user details
    array('GET', '/users/[i:id]', function ($id) {
        echo "<h1>Bienvenue sur la page de l'utilisateur $id</h1>";
    }, 'user'),
    // map fill bdd user
    array('GET', '/users/fill', function () {
        $userController = new UserController();
        $userController->fill();
    }, 'user-fill'),
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
