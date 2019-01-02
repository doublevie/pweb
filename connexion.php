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
  <title>Connexion</title>
</head>
<body>

<?php include 'inc/menu.php'; ?>




<br><br>

<div class="container">
<div align="center">
  <div class="card" style="width:500px">
    <div class="card-header">
      connexion
    </div>
    <div class="card-body">

      <form id="connection">
        <div class="form-group">

          <label for="phoneInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="phoneInputEmail1"   placeholder="Email">
         </div>





        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
        </div>

        <button type="submit" class="btn btn-primary">Connexion</button><br>Ou<br>
        <a href="inscription.php"> Inscription</a>
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
    $('#connection').on('submit',function(e){
      e.preventDefault();
var user = $('[name="email"]').val() ,
password  =  $('[name="password"]').val() ;
console.log(user);
if (user.length < 2 || password.length < 4 ) {
  alert('utilisateur ou mot de passe incorrect');
  return;
}


$.ajax({
  url: 'connect.php',
  type: 'POST',
  data: { user:user, password:password},
  success: function(result) {
    console.log(result);
           if (result == "0")  {
              alert('Mot de passe incorrect');
            } else {
window.setTimeout(function(){
  window.location.href ="./";
},100);
            }

       },
});




    })
  })
</script>
</html>
