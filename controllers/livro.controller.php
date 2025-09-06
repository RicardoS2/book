<?php
$Book = (new Data)->query('SELECT * FROM livros where id=:id', Book::class, ['id' => $_GET['id']])->fetch();

view('Book', compact('Book'));
