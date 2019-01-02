<?php
include 'inc/boot.php';
 ?>
 <!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
  <title>Contact</title>
</head>
<body>

<?php include 'inc/menu.php'; ?>




<br><br>

<div class="container">
<div align="center">
  <div class="card" style="width:500px"  align="left">

    <div class="alert alert-success" role="alert" style="display:none">
  Votre message a été envoyé !
</div>


    <div class="card-header">
      Contact
    </div>
    <div class="card-body">

      <form id="contactform">


        <div class="form-group">
          <label for="inpname">Nom</label>
          <input type="text" class="form-control" id="inpname"   placeholder="Nom">
         </div>

        <div class="form-group">
          <label for="phoneInputEmail1">Email</label>
          <input type="email" class="form-control" id="phoneInputEmail1"   placeholder="Email">
         </div>


         <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>



        <button type="submit" class="btn btn-primary">Connexion</button>
      </form>







    </div>
  </div>

</div>
</div>






</body>


<script src="js/jquery-3.3.1.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript">
$(function(){
  $('#contactform').on('submit',function(e){
e.preventDefault();
document.getElementById('contactform').reset();
$('.alert-success').slideDown();
  })
})

</script>
</html>
