<?php

namespace Models;

class Article extends \Models\Model
{

    protected const TABLE = 'news';
    public string $title;
    public string $content;

    public int|null $author_id;

    public function __get($name)
    {
        if('author' == $name) {
            if (empty($this->author_id)) {
                return 'Инкогнито';
            } else {
                return Author::findById($this->author_id)->name;
            }
        }
    }

    public function __isset(string $name): bool
    {
        if ('author' == $name && !empty($this->author_id)) {
            return true;
        }
        return false;
    }

    public static function findLastArticles(): array
    {
        $db = \App\Db::instance();;
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, self::class);
    }

    public function validateTitle($title)
    {
        if((mb_strlen($title)<3) || mb_strlen($title)>50) {
            throw new \Exception('Length of the title is not compatible!');
        }

    }

    public function validateContent($content)
    {

        if((mb_strlen($content)<5) || mb_strlen($content)>5000) {
            throw new \Exception('Length of the content is not compatible!');
        }
    }
}