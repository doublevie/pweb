<?php
include 'inc/boot.php';
include 'inc/conf.php';
include 'post/db.php';


$cats = array();
for ($i=1; $i < count($categories) ; $i++) {
$cats[$i] = '';

  $result_one = $file_db->query("SELECT * FROM annonces WHERE cat='$i'");
  foreach($result_one as $row) {
  $cats[$i].= '<div class="col"><div class="card" ><a href="details.php?id='.$row['id'].'"><img src="post/img/'.$row['pic'].'" class="card-img-top" alt="..."></i><div class="card-body">';
  $cats[$i].= '<h5 class="card-title"><a href="details.php?id='.$row['id'].'">'.$row['title'].'</a></h5>';
  $cats[$i].= '      <p class="card-text"> '. $row['details'] .'</p>';
  $cats[$i].= '</div></div></div>';
  }
  if ($cats[$i] !== '') $cats[$i] =' <div class="card"><div class="card-header">'.$categories[$i].'</div><div class="card-body"><div class="row">' .$cats[$i].'</div></div></div>';
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

<h1 class="montitre" >Projet web ,bienvenue</h1>


<?php

for ($i=1; $i < count($categories) ; $i++) {
print $cats[$i];

 }

 ?>

 <!-- <div class="card">
   <div class="card-header">
     CAT
   </div>
   <div class="card-body">

<div class="row">

<div class="col">
  <div class="card" >
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="#">Card title</a></h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>
  </div>
</div>



</div>
   </div>
 </div> -->









<br>
<br>
<div align="center">
  <a href="ajouter.php" name="button" class="btn btn-secondary">AJOUTER UNE ANNONCE</a>

</div>

</div>









</body>


<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</html>
