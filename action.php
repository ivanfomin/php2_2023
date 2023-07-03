<?php

require_once __DIR__ . '/autoload.php';

use Models\Article;
use Controllers\AdminContr;

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

if (isset($_POST['update'])) {
    $article = Article::findById($id);

    $article->title = $title;
    $article->content = $content;
    $article->save();
//    $admin = new AdminContr();
//    $admin->updateArticle(__DIR__ . '/templates/updateArticle.php', );

} else if (isset($_POST['delete'])) {
    $article = Article::findById($id);

    $article->delete();

} else if (isset($_POST['insert'])) {
    $article = new Article();
    $article->title = $title;
    $article->content = $content;
    $article->save();
}

header('Location: /Admin');
