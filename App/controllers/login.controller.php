<?php
namespace App\Controllers;

use App\Core\Helpers;
use App\Models\User;

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (!$email || !$password) {
        $error = "Preencha email e senha.";
    } elseif (User::login($email, $password)) {
        header('Location: /meuslivros');
        exit;
    } else {
        $error = "Email ou senha inválidos.";
    }
}

// Chama a view com segurança
Helpers\view('login', compact('error'));
