<?php

if(isset($_POST['id']) && isset($_POST['title'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = \App\Model\Article::findById($id);
    $article->title = $title;
    $article->content = $content;

    $article->save();
}
header('Location: /');