<?php

namespace App\Controller;

use Faker;
use App\Model\UserModel;

class UserController
{

    public function fill()
    {
        $faker = Faker\Factory::create();

        // création des users
        for ($i = 0; $i < 20; $i++) {
            $firstname = $faker->firstName();
            $lastname = $faker->lastName();
            // to lowercase
            $mail = strtolower($firstname . '.' . $lastname . '@' . $faker->freeEmailDomain());
            // insert
            $userModel = new UserModel();
            $userModel->fillBdd([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $mail,
                'password' => password_hash('azerty', PASSWORD_DEFAULT),
            ]);
        };
    }

    public function list()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        if ($users) {
            // require 'src/View/list_user.php';
            echo json_encode($users);
        } else {
            echo json_encode(['error' => 'no user found']);
        }
    }

    public function details($id)
    {
        $userModel = new UserModel();
        $user = $userModel->findOneById($id);
        if ($user) {
            echo json_encode($user);
        } else {
            echo json_encode(['error' => 'user not found']);
        }
    }
}
