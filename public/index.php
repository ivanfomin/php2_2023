<?php

require_once __DIR__ . '/../autoload.php';

use Models\Article;
use Models\Author;

$view = new View();

$view->authors = Author::findAll();
$view->articles = Article::findAll();



echo $view->count();


$view->display(__DIR__ . '/../templates/articles.php');

echo '<a href="/../templates/admin_panel.php">Админ панель</a>';


