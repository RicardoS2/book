<?php
namespace App\Controllers;

use App\Models\User;
$user_id = User::requireLogin();

$book_id = $_GET['id'] ?? null;

if (!$book_id) {
    header('Location: /meuslivros');
    exit;
}

// Verifica se o livro pertence ao usuário logado antes de excluir se não, ele da block na rota e jogar ele direto no my_boks
$SetDataBase->query(
    "DELETE FROM books WHERE id = :id AND user_id = :user_id",
    params: [
        'id'      => $book_id,
        'user_id' => $user_id,
    ]
);

header('Location: /meuslivros');
exit;
