<?php
include 'db.php';
$u = $password = '';
extract($_POST);


$found = false;
$result_one = $file_db->query("SELECT * FROM utilisateurs WHERE phone LIKE '$phone' OR email LIKE '$email'");
foreach($result_one as $row) {
  print "ok";
  die();
$found = true;
}



$file_db->exec("INSERT INTO utilisateurs (phone,email,password) VALUES ('$phone','$email','$password') ;")OR print_r($file_db->errorInfo());
$HID =  $file_db->lastInsertId();


print $HID;

 ?>
