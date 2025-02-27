<?php

use profit\Controllers\NewsContr;

require_once __DIR__ . '/autoload.php';

$ctrl = new NewsContr();

$ctrl->actionAll();
