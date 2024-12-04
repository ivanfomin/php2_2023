<?php

use \Controllers\NewsContr;

require_once __DIR__ . '/autoload.php';

$parsed = parse_url($_SERVER['REQUEST_URI']);


$request = explode('/', $parsed['path']);

var_dump($request);die;

$ctrl = new NewsContr();

$ctrl->actionOne();
