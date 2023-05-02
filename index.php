<?php
require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/super-week');


// variables de connexion à la bdd
$host = 'localhost';
$dbname = 'super-week';
$dbUser = 'root';
$dbPass = '';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUser, $dbPass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("set names utf8");
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die();
}


$faker = Faker\Factory::create('fr_FR');
// création des users
// for ($i = 0; $i < 10; $i++) {
//     $firstname = $faker->firstName();
//     $lastname = $faker->lastName();
//     echo $firstname . ' ' . $lastname . '<br>';
//     // to lowercase
//     $mail = strtolower($firstname . '.' . $lastname . '@' . $faker->freeEmailDomain());
//     echo $mail . '<br>';
//     // insert
//     $req = $bdd->prepare('INSERT INTO user (first_name, last_name, email) VALUES (:firstname, :lastname, :email)');
//     $req->execute([
//         'firstname' => $firstname,
//         'lastname' => $lastname,
//         'email' => $mail
//     ]);
// }

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
        echo "<h1>Bienvenue sur la liste des utilisateurs</h1>";
    }, 'users'),
    // map 1 user details page
    array('GET', '/users/[i:id]', function ($id) {
        echo "<h1>Bienvenue sur la page de l'utilisateur $id</h1>";
    }, 'user'),
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
