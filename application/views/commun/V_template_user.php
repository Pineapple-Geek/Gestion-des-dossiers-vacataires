<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets"); ?>/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<!--<span class="grille3">

    <section ><p ><img class="logo" src="http://www.greta-npdc.fr/wp-content/themes/greta/application/images/logo/greta_gip.png"></p></section>
    <section class="titre" ><p><h1>Fiche de renseignement personnel</h1></p></section>
    <section class="logo2"><p><img src="http://www.greta-npdc.fr/wp-content/themes/greta/application/images/logo/greta_gip.png"></p></section>
</span>-->
<div class="customcontainer">
    <div class="row">
        <div class="col">
            <img class="logo" src="<?php echo base_url("/assets"); ?>/images/logogreta.png">
        </div>

        <div class="col">
            <h1 class="titre">FICHE DE RENSEIGNEMENT PERSONNEL</h1>
        </div>

        <div class="col">
            <img class="logo2" src="<?php echo base_url("/assets"); ?>/images/logoprogre.png">
        </div>
    </div>
</div>
<?php if (isset($_SESSION["loginok"])) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>
<div class="customcontainer2">
<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrick KACZMAREK
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo site_url('C_administrateur/deconnexion');?>">Déconnexion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<?php } ?>

<!--<div id="progression">
<a href="formulaire1.html"> <input type="button" value="Identité et formation" class="button" style="width: 35%; height: 50px;margin-left: -230px "></a>
<a href="Contrat.html"> <input type="button" value="Contrat et statut" class="button" style="width: 35%; height: 50px;margin-left: 30px"></a>
<a href="piece.html"> <input type="button" value="Pièces jointes et validation" class="button" style="width: 35%; height: 50px;margin-left: 30px "></a>
</div>-->
<br><br>


<div class="customcontainer">
    <?php echo $contenu; ?>
</div>

<!-- <script src="piece.js" type="text/javascript"></script> -->
</body>
</html>