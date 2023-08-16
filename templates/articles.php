<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Articles</title>
</head>
<body>
<h1>Статьи</h1>
<table class="table table-striped">
    <tr>
        <th>Название</th>
        <th>Содержимое</th>
    </tr>
    <?php foreach ($this->data['articles'] as $article) : ?>
    <tr>
        <td><?=$article->title;?></td>
        <td><?=$article->content;?></td>
        <td><a href="/News/actionOne/?<?=$article->id;?>">Читать...</a> </td>
        <td><a href="/article/">Читать...</a> </td>
        <td><?=$article->author;?></td>
        <td><?=$article->id;?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
