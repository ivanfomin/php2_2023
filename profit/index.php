<?php



require_once __DIR__ . '/autoload.php';

use Controllers\NewsContr;

$parsed = parse_url($_SERVER['REQUEST_URI']);

$request = explode('/', $parsed['path']);

$class = '\Controllers\\' . $request[1] . 'Contr';

if (class_exists($class)) {
    $ctrl = new $class;
} else {
    $ctrl = new NewsContr();
}

if (array_key_exists('query', $parsed)) {
    $id = (int)$parsed['query'];
} else {
    $id = 0;
}
try {
    if (array_key_exists(3, $request)) {
        $act = $request[3];

        if (method_exists($ctrl, $act)) {
            $ctrl->$act($id);
        }
    } else {
        $ctrl->actionAll();
    }
} catch (\profit\Exceptions\DBException $dbexception) {
    $message = $dbexception->getMessage();
    include_once __DIR__ . '/templates/db_error.php';
} catch (\profit\Exceptions\Exception404 $exception404) {
    $message = $exception404->getMessage();
    include_once __DIR__ . '/templates/not_found_page_error.php';
}




//$art = new Controllers\NewsContr();
//$art->actionAll(__DIR__ . '/../templates/articles.php');

//$admin = new \Controllers\AdminContr();
//$admin->actionAll(__DIR__ . '/templates/admin_panel.php');



