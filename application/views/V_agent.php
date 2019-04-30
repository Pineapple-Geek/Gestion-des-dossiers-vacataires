<?php if (isset($_SESSION["loginok"]) && ($_SESSION["loginok"]["type"] == "Administrateur")) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>
<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Choix du dossier</span>
    </div>

    <div class="card-body">
        <nav class="navbar navbar-light bg-gradient-secondary btn">
            <form class="form-inline ">
                <input class="form-control form-control-sm searchbar" type="text" placeholder="Search" aria-label="Search">
                <i class="fas fa-search" aria-hidden="true"></i>
            </form>
        </nav>
        <table class="table tableSize">
            <thead>
            <tr class="tableAdmin">
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Vérification</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<?php } else { redirect('C_connexion','refresh'); }?>
