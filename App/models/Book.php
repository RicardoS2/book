<?php
namespace App\Models;

class Book
{
    public $id;
    public $title;
    public $author;
    public $description;
    public $user_id;
    public $user_name; // para JOIN e talvez definição e array serve_ID no host
    public $image;
    public $stars;

    public static function make($data)
    {
        $book              = new self();
        $book->id          = $data['id'];
        $book->title       = $data['title'];
        $book->author      = $data['author'];
        $book->description = $data['description'];
        $book->user_id     = $data['user_id'];
        $book->user_name   = $data['user_name'] ?? null;
        $book->image       = $data['image'] ?? null;
        $book->stars       = $data['stars'] ?? 0;
        return $book;
    }
}
