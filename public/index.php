<?php

require_once __DIR__ . '/../autoload.php';

use Models\Article;

$articles = Article::findLastArticles();

foreach ($articles as $article) {
    echo '<a href="/../templates/article.php?id=' . $article->id . '"> <h2>' . $article->title . '</h2></a>';
}
