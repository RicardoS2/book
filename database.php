<?php
class DB
{
    private $db;

    public function __construct()
    {
        $config = [
            'drive' => 'sqlite',
            'database' => 'database.sqlite'
        ];

        $this->db = new PDO('sqlite:database.sqlite');
    }
    public function query($query, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);
        return $prepare;
    }
}
