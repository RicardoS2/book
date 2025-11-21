<?php
namespace App\Controllers;

session_destroy();

header('Location: /');
exit;
