<?php
function my_autoload($class)
{

        $myClass = str_replace('\\', '/', __DIR__ . '/' . $class .'.php' );

        if (is_file($myClass))
        {
            //require_once str_replace('\\', '/', __DIR__ . '/' . $class . '.php');
            require_once $myClass;
        }

}

spl_autoload_register('my_autoload');