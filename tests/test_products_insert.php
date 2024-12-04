<?php

use App\Db;

include_once __DIR__ . '/../autoload.php';

$db = new Db();

$table = 'products';

$sql = "INSERT INTO " . $table . " (title, price) VALUES (:title, :price)";

$db->execute($sql, [':title'=>'One Touch', ':price'=>25000]);