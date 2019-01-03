<?php
$id =  ($_GET['id'] !== null?$_GET['id']:'1');

include 'inc/boot.php';
include 'inc/conf.php';
include 'post/db.php';



 $cats = ' <div class="card"><div class="card-header">'.$categories[$id].'</div><div class="card-body"><div class="row">';
  $result_one = $file_db->query("SELECT * FROM annonces WHERE cat='$id'");
  foreach($result_one as $row) {
  $cats.= '<div class="col col-4"><div class="card" ><a href="details.php?id='.$row['id'].'"><img src="post/img/'.$row['pic'].'" class="card-img-top" alt="..."></i><div class="card-body">';
  $cats.= '<h5 class="card-title"><a href="details.php?id='.$row['id'].'">'.$row['title'].'</a></h5>';
  $cats.= '      <p class="card-text"> '. $row['details'].'</p>';
  $cats.= '</div></div></div>';
  }




 ?>


<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/style.css">

  <title>Projet web</title>




</head>
<body>


<?php include 'inc/menu.php'; ?>


<div class="container">


<br><br>

<?php


print $cats;

 ?>














</div>









</body>


<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</html>
