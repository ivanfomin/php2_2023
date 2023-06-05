<?php

class View implements Countable
{
    use DataTrait;
    public function display(string $template)
    {
        include $template;
    }

    public function count(): int
    {
        return count($this->data);
    }
}