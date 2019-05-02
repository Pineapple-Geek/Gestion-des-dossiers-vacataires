<div class="row">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>

        <div class="card-body cardBody">
            <form class="form-horizontal">
                <div class="form-row justify-content-center">
                    <div class="col">
                        <label id="Civilité" class="col-sm-6 col-form-label text-right">Civilité :</label> <input name="civilite" type="radio" required>Madame</input> <input name="civilite" type="radio" required>Monsieur</input>
                        <label for="nom" class="col-sm-6 col-form-label text-right">Nom:</label> <input class="input" type="text" name="nom" id="nom" required>
                        <label for ="nomNaiss" class="col-sm-6 col-form-label text-right">Nom de naissance:</label> <input class="input" type="text" name="nomNaiss" id="nomNaiss" required>
                        <label for="prenom" class="col-sm-6 col-form-label text-right">Prénom:</label> <input class="input" type="text" name="prenom" id="prenom" required>
                        <label class="col-sm-6 col-form-label text-right">Date de Naissance:</label> <input class="input" class="date" type="Date">
                        <label class="col-sm-6 col-form-label text-right">Lieu de Naissance:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Département de Naissance:</label> <input class="input" type="text" name="fullname">
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <input class="input" type="number" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <input class="input" type="number" name="fullname">
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N° Sécurité Sociale:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Adresse mail académique:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Adresse mail perso:</label> <input class="input" type="text" name="fullname">
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
                        <input type="radio" name="intervenants" value="Formateur" required><label class="labelRadioPadding">Formateur</label>
                        <input type="radio" name="intervenants" value="Conseiller bilan" required><label class="labelRadioPadding">Conseiller bilan</label>
                        <input type="radio" name="intervenants" value="Accompagnateur VAE" required><label class="labelRadioPadding">Accompagnateur VAE</label>
                        <input type="radio" name="intervenants" value="Jury" required><label class="labelRadioPadding">Jury</label>
                        <input type="radio" name="intervenants" value="Retraités" required><label class="labelRadioPadding">Retraités</label>
                        <input type="radio" name="intervenants" value="Demandeurs d’emploi" required><label class="labelRadioPadding">Demandeurs d’emploi</label>
                    </div>
                </div>

                    <div class="form-row">

                    <div class="col"> 
                        <label class="col-sm-5 col-form-label text-right labelMarginLeft">Administratif/autre personnel : </label>
                        <input type="text" name=""><br>
                    </div>

                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom2">Statut : </label>
                        <select class="selectFontSize" required>
                            <option> - </option>
                            <option>Poste gagé titulaire</option>
                            <option>Vacataire non titulaire mis à disposition</option>
                            <option>Contractuel en CDI</option>
                            <option>Contractuel en CDD</option>
                            <option>Sous traitant ou auto-entrepreneur</option>
                            <option>Vacataire non titulaire</option>
                            <option>Vacataire titulaire en HS</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom2">Catégorie : </label>
                        <select class="selectFontSize" required>
                            <option> - </option>
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
                            <option>Contractuels CDD ou CDI 1ère cat.</option>
                            <option>Contractuels CDD ou CDI 2ème cat.</option>
                            <option>Contractuels CDD ou CDI 3ème cat.</option>
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
                        <label class="col-sm-6 col-form-label text-right">Etablissement:</label> <input class="input" type="text" name="fullname">
                    </div>
                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom">Ville:</label> <input class="input" type="text" name="fullname">
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Code Postal :</label> <input class="input" type="number" name="fullname">
                    </div>
                </div>
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
</script>