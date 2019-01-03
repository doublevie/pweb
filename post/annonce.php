<?php
// print_r($_REQUEST);
include 'db.php';

$userid = $_COOKIE['UID'];
$categ = $_POST['categ'];
$title = $_POST['title'];
$pic = $_POST['pic'];
$details = $_POST['details'];
$date = date('Y-m-d H:i');



$file_db->exec("INSERT INTO annonces (uid,cat,title,details,pic,date)
 VALUES ('$userid','$categ','$title','$details','$pic','$date') ;")OR print_r($file_db->errorInfo());
$HID =  $file_db->lastInsertId();

print $HID;
 ?>
