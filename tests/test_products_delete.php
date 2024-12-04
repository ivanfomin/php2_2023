<?php

use App\Db;

include_once __DIR__ . '/../autoload.php';

$db = new Db();

$table = 'products';

$sql = "DELETE FROM  " . $table . " WHERE id BETWEEN ? AND ?";

$db->execute($sql, [3,5]);