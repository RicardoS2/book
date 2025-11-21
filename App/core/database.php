<?php
namespace App\Core;

class DB
{
    private $db;

    public function __construct()
    {
        // Caminho absoluto para garantir que o arquivo será encontrado
        $databasePath = __DIR__ . '/../../db.sqlite';

        if (!file_exists($databasePath)) {
            throw new \Exception("Arquivo do banco não encontrado em: $databasePath");
        }

        $dsn = "sqlite:$databasePath";

        $this->db = new \PDO($dsn);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function query($query, $class = null, $params = [])
    {
        $stmt = $this->db->prepare($query);

        if ($class && class_exists($class)) {
            $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        }

        $stmt->execute($params);
        return $stmt;
    }
}

$SetDataBase = new DB;
