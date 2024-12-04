<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MultiExceptions</title>
</head>
<body>
    <?php foreach ($errors as $error) : ?>
    <h2 style="color: brown"><?=$error->getMessage();?></h2>

    <?php endforeach; ?>
<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>
</body>
</html>
