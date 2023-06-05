<?php

require_once __DIR__ . '/../autoload.php';

use Models\Article;

$articles = Article::findLastArticles();

foreach ($articles as $article) {
    echo '<a href="/../templates/article.php?id=' . $article->id . '"> <h2>' . $article->title . '</h2></a>';
}


$atricle = new Article();
$atricle->title = 'TI4';
$atricle->content = 'Con4';
$atricle->delete();

$atricle->save();

$atricle->title = 'TI5';
$atricle->content = 'Con5';
$atricle->save();
$atricle->delete();

echo '<a href="/../templates/admin_panel.php">Админ панель</a>';

