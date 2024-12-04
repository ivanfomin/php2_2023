<?php
require_once __DIR__ . '/../autoload.php';

use Models\Article;

$title = $_POST['title'];
$content = $_POST['content'];

if (isset($_POST['insert'])) {
    $article = new Article();
    try {
        $article->fill(['title' => $title, 'content' => $content]);
    } catch (\Exceptions\MultiException $e) {
        $errors = $e;

        include_once __DIR__ . '/../templates/show_errors.php';
        die();
    }
    //$article->title = $title;
   // $article->content = $content;
   // $article->wrong = 123;



    $article->save();
}

header('Location: /Admin');
