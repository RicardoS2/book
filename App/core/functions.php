<?php
namespace App\Core\Helpers;

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    $template = __DIR__ . '/../views/template/app.php';

    if (!file_exists($template)) {
        throw new \Exception("Template não encontrado: " . $template);
    }

    require $template;
}

function dd($dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

function abort($code)
{
    http_response_code($code);

    $errorPage = __DIR__ . '/../views/' . $code . '.view.php';

    if (file_exists($errorPage)) {
        require $errorPage;
    } else {
        echo "Erro {$code}";
    }

    die();
}
