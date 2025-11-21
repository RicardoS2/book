<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\User;

$user_id = User::requireLogin();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title       = trim($_POST['title']);
    $author      = trim($_POST['author']);
    $description = trim($_POST['description']);
    $stars       = intval($_POST['stars'] ?? 0);

    $imageName = null;
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $imageName);
    }

    try {
        $SetDataBase->query(
            "INSERT INTO books (title, author, description, user_id, image, stars)
            VALUES (:title, :author, :description, :user_id, :image, :stars)",
            params: [
                'title'       => $title,
                'author'      => $author,
                'description' => $description,
                'user_id'     => $user_id,
                'image'       => $imageName,
                'stars'       => $stars,
            ]
        );
        header('Location: /meuslivros');
        exit;
    } catch (\PDOException $e) {
        $error = "Livro já existe ou erro ao cadastrar.";
    }
}

Helpers\view('create_book', compact('error'));
