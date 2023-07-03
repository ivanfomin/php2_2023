<?php

use \Controllers\NewsContr;

require_once __DIR__ . '/autoload.php';

$parsed = parse_url($_SERVER['REQUEST_URI']);

$request = explode('/', $parsed['path']);

$class = '\Controllers\\' . $request[1] . 'Contr';

if (class_exists($class)) {
    $ctrl = new $class;
} else {
    $ctrl = new NewsContr();
}

$act = $request[2];
$id = (int)$parsed['query'];
if (method_exists($ctrl, $act)) {
    if (!empty($id)) {
        $ctrl->$act($id);
    } else {
        $ctrl->$act();
    }
} else {
    $ctrl->actionAll();
}



//$art = new Controllers\NewsContr();
//$art->actionAll(__DIR__ . '/../templates/articles.php');

//$admin = new \Controllers\AdminContr();
//$admin->actionAll(__DIR__ . '/templates/admin_panel.php');


