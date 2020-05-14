<?php

namespace App\Models;


class User
{
    public function signUp()
    {
        $db = new \PDO('mysql:dbname=blog;host=localhost;charset=utf8mb4', 'admin', 'password');

        $auth = new \Delight\Auth\Auth($db);

        try {
            $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username']);
        
            //echo 'We have signed up a new user with the ID ' . $userId;
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
}
