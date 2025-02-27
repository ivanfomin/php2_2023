<?php

require_once __DIR__ . '/../autoload.php';

use profit\App\View;
use profit\Models\Article;
use profit\Models\Author;

$view = new View();

$view->authors = Author::findAll();
$view->articles = Article::findAll();


$view->display(__DIR__ . '/../templates/articles.php');

echo '<a href="/../templates/admin_panel.php">Админ панель</a>';


