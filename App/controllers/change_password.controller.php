<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\User;

$error   = '';
$success = '';

$user_id = User::requireLogin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = $_POST['current_password'] ?? '';
    $new     = $_POST['new_password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    $user = $SetDataBase->query(
        "SELECT * FROM users WHERE id = :id",
        class: User::class,
        params: ['id' => $user_id]
    )->fetch();

    if (!$user)
    {
        $error = "Usuário não encontrado.";
    } elseif (!password_verify($current, $user->password)) {
        $error = "Senha atual incorreta.";
    } elseif ($new !== $confirm) {
        $error = "Nova senha e confirmação não conferem.";
    } else {
        $hash = password_hash($new, PASSWORD_DEFAULT);
        $SetDataBase->query(
            "UPDATE users SET password = :password WHERE id = :id",
            params: ['password' => $hash, 'id' => $user_id]
        );
        $success = "Senha atualizada com sucesso!";
    }
}

Helpers\view('change_password', compact('error', 'success'));
