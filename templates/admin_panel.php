<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div {
            width: 800px;
            border: 2px solid grey;
            margin: 50px auto 0;
            padding: 0 15px;
            font-family: Verdana, sans-serif;
            background-color: #d8e9f1;
        }

        .wrap {
            position: absolute;
            left: 50%;
        }
    </style>
</head>
<body>

<?php

require_once __DIR__ . '/../autoload.php';

use Models\Article;

$articles = Article::findAll();

foreach ($articles as $article) { ?>
    <div>
        <form method="post" action="../action.php">
            <input type="text" name="id" value="<?php echo $article->id; ?>" style="width: 5%">
            <input type="text" name="title" value="<?php echo $article->title; ?>">
            <input type="text" name="content" value="<?php echo $article->content; ?>" style="width: 50%">
            <input readonly type="text" name="author" value="<?php echo $article->author; ?>" >
            <input type="submit" name="update" value="Изменить">
            <input type="submit" name="delete" value="Удалить">
        </form>
    </div>
<?php }
?>
<p class="wrap"> Добавить новость </p>

<div>
    <form method="post" action="../action.php">
        <input type="text" name="title">
        <input type="text" name="content" style="width: 50%">
        <input type="submit" name="insert" value="Сохранить">
    </form>
</div>
<br>
<a class="wrap" href="/public/index.php">Статьи</a>

</body>
</html>
<?php


