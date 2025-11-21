<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\User;

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if (!$name || !$email || !$password) {
        $error = "Todos os campos são obrigatórios.";
    } elseif ($password !== $confirm) {
        $error = "As senhas não conferem.";
    } else {
        try {
            User::create($name, $email, $password);
            header('Location: /login');
            exit;
        } catch (\PDOException $e) {
            $error = "Erro: email já cadastrado.";
        }
    }
}

Helpers\view('register', compact('error'));
