<?php if (isset($_SESSION["loginok"]) && ($_SESSION["loginok"]["type"] == "Administrateur")) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>
<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Choix du dossier</span>
    </div>

    <div class="card-body">
        <form class="form-inline ">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
    </div>
</div>

<?php } else { redirect('C_connexion','refresh'); }?>
