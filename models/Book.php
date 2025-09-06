<?php
class Book
{
    public $id;
    public $title;
    public $author;
    public $description;
    public $user_id;
    public $image;
    public $average_rating;

    public static function make($item): Book
    {
        $book                 = new self();
        $book->id             = $item['id'];
        $book->title          = $item['title'];
        $book->author         = $item['author'];
        $book->description    = $item['description'];
        $book->user_id        = $item['user_id'];
        $book->image          = $item['image'] ?? 'default.png';
        $book->average_rating = $item['average_rating'] ?? 0;
        return $book;
    }

    public static function all(): array
    {
        $db    = new Data();
        $stmt  = $db->query("SELECT * FROM books");
        $books = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $books[] = self::make($row);
        }
        return $books;
    }

    public static function find($id): ?Book
    {
        $db   = new Data();
        $stmt = $db->query(
            "SELECT * FROM books WHERE id = :id",
            null,
            ['id' => $id]
        );
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? self::make($row) : null;
    }

    public static function create($title, $author, $description, $user_id, $image = 'default.png')
    {
        $db = new Data();
        $db->query(
            "INSERT INTO books (title, author, description, user_id, image)
             VALUES (:title, :author, :description, :user_id, :image)",
            null,
            ['title' => $title, 'author' => $author, 'description' => $description, 'user_id' => $user_id, 'image' => $image]
        );
    }
}
