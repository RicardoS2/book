<?php
namespace App\Models;

use App\Core\DB;

class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public static function make($item)
    {
        $user           = new self();
        $user->id       = $item['id'] ?? null;
        $user->name     = $item['name'] ?? '';
        $user->email    = $item['email'] ?? '';
        $user->password = $item['password'] ?? '';
        return $user;
    }

    public static function create($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        (new DB)->query(
            "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)",
            params: ['name' => $name, 'email' => $email, 'password' => $hash]
        );
    }

    public static function findByEmail($email)
    {
        return (new DB)->query(
            "SELECT * FROM users WHERE email=:email",
            class: self::class,
            params: ['email' => $email]
        )->fetch();
    }

    public static function findById($id)
        {
        return (new DB)->query(
            "SELECT * FROM users WHERE id=:id",
            class: self::class,
            params: ['id' => $id]
        )->fetch();
    }

    public static function changePassword($id, $newPassword)
            {
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
        (new DB)->query(
            "UPDATE users SET password=:password WHERE id=:id",
            params: ['password' => $hash, 'id' => $id]
        );
    }

    public static function login($email, $password)
            {
        $user = self::findByEmail($email);
        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id']   = $user->id;
            $_SESSION['user_name'] = $user->name;
            return true;
        }
        return false;
    }

    public static function requireLogin()
            {
        $user_id = $_SESSION['user_id'] ?? null;
        if (!$user_id) {
            header('Location: /login');
            exit;
        }
        return $user_id;
    }
}
