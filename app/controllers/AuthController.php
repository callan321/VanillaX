<?php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    public static function register()
    {
        global $view, $error, $success;

        $error = '';
        $success = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (!$username || !$email || !$password) {
                $error = 'All fields are required.';
            } elseif (User::findByUsername($username) || User::findByEmail($email)) {
                $error = 'Username or email already exists.';
            } else {
                $user = User::create($username, $email, $password);
                if ($user) {
                    header('Location: /');
                    exit;
                } else {
                    $error = 'Something went wrong. Try again.';
                }
            }
        }
        $view = __DIR__ . '/../views/auth/register.php';
    }

    public static function listUsers()
    {
        global $view, $users;
        $users = User::all(50);
        $view = __DIR__ . '/../views/auth/users.php';
    }
}
