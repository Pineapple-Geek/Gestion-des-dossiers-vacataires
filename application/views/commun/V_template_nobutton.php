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

<!--<div id="progression">
<a href="formulaire1.html"> <input type="button" value="Identité et formation" class="button" style="width: 35%; height: 50px;margin-left: -230px "></a>
<a href="Contrat.html"> <input type="button" value="Contrat et statut" class="button" style="width: 35%; height: 50px;margin-left: 30px"></a>
<a href="piece.html"> <input type="button" value="Pièces jointes et validation" class="button" style="width: 35%; height: 50px;margin-left: 30px "></a>
</div>-->
<br><br>


<div class="customcontainer">
    <?php echo $contenu; ?>
</div>
<?php echo $scripts; ?>
<!-- <script src="piece.js" type="text/javascript"></script> -->
</body>
</html>