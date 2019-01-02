<?php include 'inc/conf.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light " style="background:#<?php print $menubg;?>">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="./">Projet Web</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


      <li class="nav-item dropdown active">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    categories
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Tous les categories</a>
    <div class="dropdown-divider"></div>

<?php
for ($i=1; $i <count($categories) ; $i++) {
  print '<a class="dropdown-item" href="#">'.$categories[$i].'</a>';
}

 ?>
  </div>
</li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php"><i class="material-icons">message</i> Contact <span class="sr-only">(current)</span></a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <?php
if ( $connected) {
  ?>

  <li class="nav-item active">
    <!-- <a class="nav-link rouge" href="ajouter.php">Ajuter une annonce </a> -->
    <a class="nav-link rouge btn btn-success" href="ajouter.php"><i class="material-icons">add</i> Ajuter une annonce </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link rouge" href="connexion.php">Mes annonces </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link rouge" href="deconexion.php"><i class="material-icons">power_settings_new</i> Deconnection </a>
  </li>


<?php
} else {
       ?>
      <li class="nav-item active">
        <a class="nav-link rouge" href="connexion.php">Connexion </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inscription.php">Inscription </a>
      </li>
      <?php
      }
         ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
      </form>
    </ul>
  </div>
</nav>
