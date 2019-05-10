<div class="row">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>

        <div class="card-body cardBody">
            <form class="form-horizontal" action="<?php echo site_url("C_identite/validation"); ?>" method="post">
                <div class="form-row justify-content-center">
                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right">Nom:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Nom de naissance:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Prénom:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Date de Naissance:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Lieu de Naissance:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Département de Naissance:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N° Sécurité Sociale:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Adresse mail académique:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                        <label class="col-sm-6 col-form-label text-right">Adresse mail perso:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                </div>
        </div>
    </div>

    <div class="card cardMargin">
        <div class="card-header cardcolor"><span class="cardTitle">Contrat & Statut</span></div

        <div class="card-body cardBody">
            <form>
                <div class="form-row">
                    <div class="col-sm-9">
                        <h6 class="card-title cardBodyTitle">Fonction occupée : </h6>

                        <label class="col-sm-3 col-form-label text-right">Intervenants : </label><label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                </div>
                <fieldset id="formEtat">

                    <div class="form-row">

                    <div class="col"> 
                        <label class="col-sm-5 col-form-label text-right labelMarginLeft">Administratif : </label><label class="col-sm-6 col-form-label text-right">TEST</label><br>
                    </div>

                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right">Statut : </label><label class="col-sm-6 col-form-label text-right">TEST</label><br>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right">Catégorie : </label><label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p class="lieuAffect"><u> Lieu d'affectation principal :</u></p>
                        <label class="col-sm-6 col-form-label text-right labelMarginLeft2">Etablissement:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom">Ville:</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Code Postal :</label> <label class="col-sm-6 col-form-label text-right">TEST</label>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-1 offset-sm-11">
        <input type="submit" value="Suivant" class="inputcolor">
    </div>
</div>

</form>