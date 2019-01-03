<?php


$time = date('HisYmd');

$target_path = "img/".$time;

$target_path = $target_path . basename( $_FILES['image']['name']);

if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
  echo $time.basename( $_FILES['image']['name']);

} else{
}

?>
