<?php
$id =  ($_GET['id'] !== null?$_GET['id']:'1');

include 'inc/boot.php';
include 'inc/conf.php';
include 'post/db.php';


$det = '';
  $result_one = $file_db->query("SELECT * FROM annonces WHERE id='$id'");
  foreach($result_one as $row) {
    $title = '<li class="breadcrumb-item"><a href="./">Acceuil</a></li>';
    $title.= '<li class="breadcrumb-item"><a href="./categories.php?id='.$row['cat'].'">'.$categories[$row['cat']].'</a></li>';
    $title.= '<li class="breadcrumb-item">'. $row['title'] .'</li>';
    $title2 =  $row['title'] .'<span style="float:right">'.$row['date'].'</span>' ;
  $det.= '<img src="post/img/'.$row['pic'].'" class="card-img-top" alt="...">';
  $det.= '<div class="card-body">';
  $det.= '<h5 class="card-title"><a href="#">'.$row['title'].'</a></h5>';
  $det.= '<p class="card-text">'.$row['details'].'</p>';


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

<br><br>
<div class="container">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
  <?php

print $title;
   ?>
    </ol>
  </nav>

  <div class="card">
   <div class="card-header">
     <?php print $title2; ?>
   </div>
   <div class="card-body">

<?php
print $det;
 ?>

    <!-- <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="#">Card title</a></h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div> -->

   </div>
 </div>











</div>









</body>


<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
</html>
