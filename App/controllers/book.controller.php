<?php
namespace App\Controllers;

use App\Core\Helpers;
use App\Models\Book;

$book = $SetDataBase->query(
    "SELECT * FROM books WHERE id = :id",
    class: Book::class,
    params: ["id" => $_GET['id']]
)->fetch();

Helpers\view('book', compact('book'));
