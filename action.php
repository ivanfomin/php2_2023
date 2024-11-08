<?php

require_once __DIR__ . '/autoload.php';

use Models\Article;

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

if (isset($_POST['update'])) {

    $article = Article::findById($id);

    $article->title = $title;
    $article->content = $content;
    $article->save();

} else if (isset($_POST['delete'])) {
    $article = Article::findById($id);

    $article->delete();

} else if (isset($_POST['insert'])) {
    $article = new Article();
    $article->title = $title;
    $article->content = $content;
    $article->save();
}

header('Location: /templates/admin_panel.php');
