<?php

require_once __DIR__ . '/../autoload.php';

use Models\Article;


$view = new View();
$view->articles = Article::findAll();
$view->products = \Models\Product::findAll();
$view->authors = \Models\Author::findAll();


echo $view->count();

$view->display(__DIR__ . '/../templates/articles.php');

echo '<a href="/../templates/admin_panel.php">Админ панель</a>';


