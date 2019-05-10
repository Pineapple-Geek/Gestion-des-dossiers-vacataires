<div class="row">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>

        <div class="card-body cardBody">
            <form class="form-horizontal" action="<?php echo site_url("C_identite/validation"); ?>" method="post">
                <div class="form-row justify-content-center">
                    <div class="col">
                        <label id="Civilité" class="col-sm-6 col-form-label text-right">Civilité :</label> <input name="civilite" type="radio" value="Madame" required>Madame</input> <input name="civilite" type="radio" value="Monsieur" required>Monsieur</input>
                        <label for="nom" class="col-sm-6 col-form-label text-right">Nom:</label> <input class="input" type="text" name="Nom" id="Nom" required>
                        <label for ="nomNaiss" class="col-sm-6 col-form-label text-right">Nom de naissance:</label> <input class="input" type="text" name="NomNaiss" id="nomNaiss" required>
                        <label for="prenom" class="col-sm-6 col-form-label text-right">Prénom:</label> <input class="input" type="text" name="Prenom" id="prenom" required>
                        <label class="col-sm-6 col-form-label text-right">Date de Naissance:</label> <input class="input" class="date" name="DateNaiss" type="date" required>
                        <label class="col-sm-6 col-form-label text-right">Lieu de Naissance:</label> <input class="input" type="text" name="LieuNaiss" required>
                        <label class="col-sm-6 col-form-label text-right">Département de Naissance:</label> <input class="input" type="text" name="DepNaiss" required>
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <input class="input" type="text" name="Adresse" required>
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <input class="input" type="text" name="Ville" required>
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <input class="input" type="number" name="CodeP" required>
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <input class="input" type="text" name="Pays" required>
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <input class="input" type="number" name="Tel" required>
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N° Sécurité Sociale:</label> <input class="input" type="number" name="SecuSoc" required>
                        <label class="col-sm-6 col-form-label text-right">Adresse mail académique:</label> <input class="input" type="mail" name="MailA" placeholder="(Facultatif)">
                        <label class="col-sm-6 col-form-label text-right">Adresse mail perso:</label> <input class="input" type="mail" name="MailP" required>
                    </div>
                </div>
        </div>
    </div>

    <div class="card cardMargin">
        <div class="card-header cardcolor"><span class="cardTitle">Contrat & Statut</span></div>

        <div class="card-body cardBody">
            <form>
                <div class="form-row">
                    <div class="col-sm-9">
                        <h6 class="card-title cardBodyTitle">Fonction occupée : </h6>

                        <label class="col-sm-3 col-form-label text-right">Intervenants : </label>
                        <input type="radio" name="intervenants" value="Formateur" onChange="change2()" required><label class="labelRadioPadding">Formateur</label>
                        <input type="radio" name="intervenants" value="Conseiller bilan" onChange="change2()" required><label class="labelRadioPadding">Conseiller bilan</label>
                        <input type="radio" name="intervenants" value="Accompagnateur VAE" onChange="change2()" required><label class="labelRadioPadding">Accompagnateur VAE</label>
                        <input type="radio" name="intervenants" value="Jury" onChange="change2()" required><label class="labelRadioPadding">Jury</label>
                        <input type="radio" name="intervenants" value="Retraités" onChange="change()" id="switchActif" required><label class="labelRadioPadding">Retraités</label>
                        <input type="radio" name="intervenants" value="Demandeurs d’emploi" onChange="change()" id="switchActif" required><label class="labelRadioPadding">Demandeurs d’emploi</label>
                    </div>
                </div>
                <fieldset id="formEtat">

                    <div class="form-row">

                    <div class="col"> 
                        <label class="col-sm-5 col-form-label text-right labelMarginLeft">Administratif : </label>
                        <input type="text" name="Administratif"><br>
                    </div>

                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right">Statut : </label>
                        <select name="Statut" class="selectFontSize" required>
                            <option>Poste gagé titulaire</option>
                            <option>Vacataire non titulaire mis à disposition</option>
                            <option>Contractuel</option>
                            <option>Sous traitant ou auto-entrepreneur</option>
                            <option>Vacataire non titulaire</option>
                            <option>Vacataire titulaire en HS</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right">Catégorie : </label>
                        <select name="Categorie" class="selectFontSize" required>
                            <option style="color: grey;">Enseignant</option>
                            <option style="color: grey;">----------------------------------</option>
                            <option>Agrégé</option>
                            <option>Certifié</option>
                            <option>PLP</option>
                            <option>Instituteur, Professeur des écoles</option>
                            <option>Personnel d'éducation autre</option>
                            <option></option>
                            <option style="color: grey;">Direction</option>
                            <option style="color: grey;">----------------------------------</option>
                            <option>Personnel de direction</option>
                            <option>Chef des travaux</option>
                            <option>Pers. Admin Titulaire autre que P.Direction</option>
                            <option>Pers. Admin titulaire : autre</option>
                            <option></option>
                            <option style="color: grey;">Contractuel</option>
                            <option style="color: grey;">----------------------------------</option>
                            <option>Contractuels 1ère cat.</option>
                            <option>Contractuels 2ème cat.</option>
                            <option>Contractuels 3ème cat.</option>
                            <option></option>
                            <option style="color: grey;">Autres</option>
                            <option style="color: grey;">----------------------------------</option>
                            <option>Personnel de service</option>
                            <option>Prestataire de service ou auto-entrepreneur</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p class="lieuAffect"><u> Lieu d'affectation principal :</u></p>
                        <label class="col-sm-6 col-form-label text-right labelMarginLeft2">Etablissement:</label> <input class="input" type="text" name="EtaAf">
                    </div>
                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom">Ville:</label> <input class="input" type="text" name="VilleAf">
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Code Postal :</label> <input class="input" type="number" name="CodeAf">
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

<script type="text/javascript">
    window.onload = function() { alert("Veuillez vous munir des pièces justificative avant de remplir ce formulaire!"); }; 
    function change(){
            var $groupe = document.getElementById('formEtat');
            $groupe.disabled = true;
    }

    function change2(){
            var $groupe = document.getElementById('formEtat');
            $groupe.disabled = false;
    }  
</script>