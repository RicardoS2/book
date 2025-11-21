<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\Book;
use App\Models\User;

$user_id = User::requireLogin();

$book_id = $_GET['id'] ?? null;
$error   = '';

$book = $SetDataBase->query(
    "SELECT * FROM books WHERE id = :id AND user_id = :user_id",
    class: Book::class,
    params: [
        'id'      => $book_id,
        'user_id' => $user_id,
    ]
)->fetch();

if (!$book)
{
    header('Location: /meuslivros');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title       = trim($_POST['title']);
    $author      = trim($_POST['author']);
    $description = trim($_POST['description']);
    $stars       = intval($_POST['stars'] ?? 0);
    $imageName   = $book->image;

    if (!empty($_FILES['image']['name'])) {
        $newImageName = time() . '_' . $_FILES['image']['name'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $newImageName)) {
            $imageName = $newImageName;
        } else {
            $error = "Erro ao fazer upload da nova imagem.";
        }
    }

    try {
        $SetDataBase->query(
            "UPDATE books SET
                title = :title,
                author = :author,
                description = :description,
                image = :image,
                stars = :stars
            WHERE
                id = :id AND user_id = :user_id",
            params: [
                'title'       => $title,
                'author'      => $author,
                'description' => $description,
                'image'       => $imageName,
                'stars'       => $stars,
                'id'          => $book->id,
                'user_id'     => $user_id,
            ]
        );
        header('Location: /meuslivros');
        exit;
    } catch (\PDOException $e) {
        $error = "Erro ao atualizar o livro.";
    }
}

Helpers\view('edit_book', compact('book', 'error'));
