<?php
namespace App\Controllers;

use App\core\Helpers;
use App\Models\Book;

$search = $_GET['pesquisar'] ?? '';

$books = $SetDataBase->query(
    "SELECT b.*, u.name AS user_name
     FROM books b
     JOIN users u ON b.user_id = u.id
     WHERE b.title LIKE :filter",
    class: Book::class,
    params: ['filter' => "%$search%"]
)->fetchAll();

Helpers\view('index', compact('books'));
