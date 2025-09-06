<?php
class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public static function make($item): User
    {
        $user           = new self();
        $user->id       = $item['id'];
        $user->name     = $item['name'];
        $user->email    = $item['email'];
        $user->password = $item['password'];
        return $user;
    }

    public static function auth($email, $password): ?User
    {
        $db   = new Data();
        $stmt = $db->query(
            "SELECT * FROM users WHERE email = :email AND password = :password",
            self::class,
            ['email' => $email, 'password' => $password]
        );
        return $stmt->fetch() ?: null;
    }

    public static function create($name, $email, $password)
    {
        $db = new Data();
        $db->query(
            "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)",
            null,
            ['name' => $name, 'email' => $email, 'password' => $password]
        );
    }
}
