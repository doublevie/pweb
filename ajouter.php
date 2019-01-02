<?php
include 'inc/boot.php';
if (!$connected) header('Location: connexion.php');
 ?>
 <!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
  <title>Ajouter une annonce</title>
</head>
<body>
<?php include 'inc/menu.php'; ?>



<br>

<div class="alert alert-danger" role="alert" style="display:none">
Annonce na été pas ajouté
</div>
<div class="alert alert-success" role="alert" style="display:none">
Annonce a été ajouté
</div>

<div class="container">
  <div class="card">
    <div class="card-header">
      Nouvelle annonce
    </div>
    <div class="card-body">

      <form id="addann">

        <div class="form-group">
          <label for="exampleFormControlSelect2">Categorie</label>
          <select  class="form-control" name="categorie" id="exampleFormControlSelect2">
 <?php
for ($i=1; $i <count($categories) ; $i++) {
print '<option value="'.$i.'">'.$categories[$i].'</option>';
}
 ?>

          </select>
        </div>

        <hr>
         <div class="form-group">
           <label for="ttle1">Titre</label>
           <input type="text"  name="titre"  class="form-control" id="ttle1" aria-describedby="emailHelp" placeholder=" Titre de l'annonce">
          </div>


<hr>

<input type="hidden" name="pic" value="">
<div class="custom-file">
  <input type="file" class="custom-file-input" id="validatedCustomFile" >
  <label class="custom-file-label" for="validatedCustomFile">Photo...</label>
  <div class="invalid-feedback">Fichier invalide</div>
</div>


<hr>
          <div class="form-group">
             <label for="exampleFormControlTextarea1">Details</label>
             <textarea class="form-control"  name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>

        <button type="submit" class="btn btn-primary">Ajouter l'annonce</button>
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
$('#addann').on('submit',function(e){
  e.preventDefault();
  ajouterAnnonce();
})
})



function ajouterAnnonce(){
  var categ = document.querySelector('[name="categorie"]').value ,
  title = document.querySelector('[name="titre"]').value ,
  pic = document.querySelector('[name="pic"]').value ,
  details = document.querySelector('[name="details"]').value ;
console.log(title + ' '+ details + ' '+categ);

$.post('post/annonce.php',{categ :categ,pic:pic , title:title,details:details},function(dt){
  console.log(dt);
});




}


function showMessage(txt) {
  var alrt = $('.alert-success');
  alrt.text(txt);
  alrt.slideDown('slow').delay(2000).slideUp('slow');
}
</script>
</html>
