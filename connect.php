<?php
include 'post/db.php';
$user = $password = '';
extract($_POST);

$found = false;
$result_one = $file_db->query("SELECT * FROM utilisateurs WHERE  email LIKE '$user'  AND password LIKE '$password'");
foreach($result_one as $row) {
  setcookie("UID", $row['id'], time()+3600*24);
  setcookie("UEMAIL", $row['email'], time()+3600*24);
  die('OK');
}

print '0';


 ?>
