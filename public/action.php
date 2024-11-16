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

} else if (isset($_POST['delete'])) {
    $article = Article::findById($id);

    $article->delete();

} else if (isset($_POST['insert'])) {
    $article = new Article();
    try {
        $article->fill(['title' => $title, 'content' => $content]);
    } catch (\Exceptions\MultiException $exceptions) {
        include_once __DIR__ . '/templates/multiexceptions.php';
        die();
    }
    //$article->title = $title;
   // $article->content = $content;
   // $article->wrong = 123;



    $article->save();
}

header('Location: /Admin');
