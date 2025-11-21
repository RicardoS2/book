<?php
namespace App\Core;

session_start();

// Pega somente o caminho da URL (sem query string)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Rotas públicas
$publicRoutes = [
    '/'         => __DIR__ . '/../controllers/index.controller.php',
    '/login'    => __DIR__ . '/../controllers/login.controller.php',
    '/register' => __DIR__ . '/../controllers/register.controller.php',
    '/book'     => __DIR__ . '/../controllers/book.controller.php', // ← ADICIONADA
];

// Rotas privadas
$privateRoutes = [
    '/meuslivros'      => __DIR__ . '/../controllers/meuslivros.controller.php',
    '/create_book'     => __DIR__ . '/../controllers/create_book.controller.php',
    '/editbook'        => __DIR__ . '/../controllers/edit_book.controller.php',
    '/deletebook'      => __DIR__ . '/../controllers/delete_book.controller.php',
    '/change_password' => __DIR__ . '/../controllers/change_password.controller.php',
    '/logout'          => __DIR__ . '/../controllers/logout.controller.php',
];

// Redirecionamento se não logado
if ($uri === '/' && !isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}

// Bloqueia login/register se já logado
if (in_array($uri, ['/login', '/register']) && isset($_SESSION['user_id'])) {
    header('Location: /meuslivros');
    exit;
}

// Rotas privadas sem login → login
if (array_key_exists($uri, $privateRoutes) && !isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}

// Roteamento final
if (array_key_exists($uri, $publicRoutes)) {
    require $publicRoutes[$uri];
} elseif (array_key_exists($uri, $privateRoutes)) {
    require $privateRoutes[$uri];
} else {
    http_response_code(404);
    require __DIR__ . '/../views/404.view.php';
}
