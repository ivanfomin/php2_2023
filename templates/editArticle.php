<?php
require_once __DIR__ . '/../autoload.php';


use Models\Article;

$article = Article::findById($_GET['id']);

echo '<h1>' . $article->title . '</h1>';
echo '<div>' . $article->content . '</div>';

echo '<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>';