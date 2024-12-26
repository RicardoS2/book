<?php
$livro =(new DB)->query("SELECT * FROM livros where id=:id", Livro::class, ["id"=> $_GET['id']])->fetch();


view('livro', compact('livro'));