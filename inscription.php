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
  <title>Inscription</title>
</head>
<body>
<?php include 'inc/menu.php'; ?>



<br>

<div class="alert alert-danger" role="alert" style="display:none">
Votre message a été envoyé !
</div>
<div class="alert alert-success" role="alert" style="display:none">
Inscription réussie
</div>

<div class="container">
  <div class="card">
    <div class="card-header">
      Inscreption
    </div>
    <div class="card-body">

      <form id="inscr">
        <div class="form-group">

          <label for="phoneInputEmail1">Numero de telephone</label>
          <input type="text" name="phone" class="form-control" id="phoneInputEmail1"   placeholder="Numero de telephone">
         </div>


         <div class="form-group">

           <label for="exampleInputEmail1">Adresse email</label>
           <input type="email"  name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" email">
          </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
        </div>

        <button type="submit" class="btn btn-primary">Inscription</button>
      </form>







    </div>
  </div>

</div>






</body>


<script src="js/jquery-3.3.1.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript">
$(function(){
  $('#inscr').on('submit',function(e){
    e.preventDefault();
var phone = $('[name="phone"]').val() ,
email =  $('[name="email"]').val() ,
password =  $('[name="password"]').val() ;


if (password.length < 4) {
showError('mot de passe trop court');
  return;
}

if (phone.length < 4) {
  showError('numero de telephone invalide');
  return;
}

$.ajax({
  url: 'post/inscr.php',
  type: 'POST',
  data: { phone:phone, email:email, password:password },
  success: function(result) {
    console.log(result);
           if (result == "0")  {
              showError('Compte existe');
            } else {
$('.alert-success').slideDown('slow');
window.setTimeout(function(){
  window.location.href ="./";
},3000);
            }

       },
});



  })

})




function showError(txt) {
  var alrt = $('.alert-danger');
  alrt.text(txt);
  alrt.slideDown('slow').delay(2000).slideUp('slow');
}
</script>
</html>
