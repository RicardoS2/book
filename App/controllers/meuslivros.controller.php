<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\Book;
use App\Models\User;

$user_id = User::requireLogin();

$myBooks = $SetDataBase->query(
    "SELECT
        b.*,
        u.name AS user_name
    FROM
        books AS b
    JOIN
        users AS u ON b.user_id = u.id
    WHERE
        b.user_id = :user_id",
    class: Book::class,
    params: ['user_id' => $user_id]
)->fetchAll();

Helpers\view('my_books', compact('myBooks'));
