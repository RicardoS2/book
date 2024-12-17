<?php
require 'dados.php';

$id = $_REQUEST['id'];
$filtroDeLivros = array_filter($livros, fn($data) => $data['id'] == $id);

$livro = array_pop($filtroDeLivros);

view("livro", compact('livro'));
