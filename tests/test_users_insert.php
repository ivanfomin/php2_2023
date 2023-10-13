<?php

use App\Db;

include_once __DIR__ . '/../autoload.php';

$db = App\Db::instance();

$table = 'users';

$sql = "INSERT INTO " . $table . " (email, phone) VALUES (:email, :phone)";

$db->execute($sql, [ ':email'=>'la-la@,mail.ru', ':phone' => '+712110002244']);