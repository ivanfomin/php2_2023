<?php

use App\Db;

include_once __DIR__ . '/../autoload.php';

$db = App\Db::instance();

$table = 'products';

$sql = "INSERT INTO " . $table . " (title, price) VALUES (:title, :price)";

$db->execute($sql, [':title'=>'One Touch', ':price'=>25000]);