<?php
require_once __DIR__ . '/../autoload.php';


echo '<h1>' . $this->article->title . '</h1>';
echo '<div>' . $this->article->content . '</div>';

echo '<a href="#" onclick="history.back();return false;" class="history-back">Вернуться назад</a>';