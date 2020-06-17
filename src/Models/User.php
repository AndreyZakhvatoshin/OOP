<?php

namespace App\Models;

use PDO;
use Delight\Auth\Auth;


class User
{

    private $db;
    private $auth;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->auth = new Auth($this->db);
    }
    public function signUp()
    {

        try {
            $userId = $this->auth->register($_POST['email'], $_POST['password'], $_POST['username']);

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

    public function login()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);

            echo 'User is logged in';
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function logout()
    {
        $this->auth->logOut();
    }
}
