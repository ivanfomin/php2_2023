<?php

namespace Models;

class Article extends \Model
{

    protected const TABLE = 'news';
    public string $title;
    public string $content;

    public int|null $author_id;

    public function __get($name)
    {
        if (empty($this->author_id)) {
            return 'Инкогнито';
        } else {
            return Author::findById($this->author_id)->name;
        }
    }

    public static function findLastArticles(): array
    {
        $db = \Db::instance();;
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, self::class);
    }
}