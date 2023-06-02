<?php

namespace Models;

class Article extends \Model
{

    protected const TABLE = 'news';

    public string $title;

    public string $content;

    public static function findLastArticles(): array
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, self::class);
    }
}