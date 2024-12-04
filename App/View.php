<?php

namespace App;

class View implements \Countable
{
    use MagicTrait;

    public function display(string $template)
    {
        include $template;
    }

    public function count(): int
    {
        return count($this->data);
    }
}