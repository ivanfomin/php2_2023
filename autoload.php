<?php
function my_autoload($class)
{
    require_once str_replace('\\', '/', __DIR__ . '/' . $class . '.php');
}

spl_autoload_register('my_autoload');