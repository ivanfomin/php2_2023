<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<div>
    <form method="post" action="../actions/editArticle.php">
        <input type="hidden" name="id" value="<?= $this->article->id; ?>">
        <input type="text" name="title" value=" <?= $this->article->title; ?>">
        <input type="text" name="content" value=" <?= $this->article->content; ?>">
        <input type="submit" value="Изменить">
    </form>
</div>
</body>
</html>
