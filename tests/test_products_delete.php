<?php

use App\Db;

include_once __DIR__ . '/../autoload.php';

$db =  App\Db::instance();

$table = 'products';

$sql = "DELETE FROM  " . $table . " WHERE id BETWEEN ? AND ?";

$db->execute($sql, [3,8]);