<?php
$dbname =   __DIR__ . '/db.sqlite';
$file_db = new PDO('sqlite:'.$dbname);
$file_db->exec("pragma synchronous = off;");
error_reporting(0);
 ?>
