<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';
$livros    = (new Data)->query(
    'SELECT * FROM livros where titulo LIKE :filtro',

    class: Livro::class,
    params: ["filtro" => "%$pesquisar%"])->fetchAll();

view('index', compact('livros'));
