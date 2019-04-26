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
                        <br><br>
                        <p class="lieuAffect"><u> Lieu d'affectation principal :</u></p>
                        <label class="col-sm-6 col-form-label text-right">Etablissement:</label> <input class="input" type="text" name="fullname">
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <input class="input" type="number" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <input class="input" type="number" name="fullname">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Ville:</label> <input class="input" type="text" name="fullname">
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N°INSEE + CLE:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Date de début d'activité:</label> <input class="input" class="date"type="date">
                        <label class="col-sm-6 col-form-label text-right">Adresse mail académique:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Adresse mail perso:</label> <input class="input" type="text" name="fullname">
                        <label class="col-sm-6 col-form-label text-right">Nombre d'enfants:</label> <input class="input" type="text" name="fullname" >
                        <label class="col-sm-6 col-form-label text-right labelMarginBottom">Code Postal :</label> <input class="input" type="number" name="fullname">
                    </div>
                </div>
        </div>
    </div>
    <div class="card cardMargin">
        <div class="card-header cardcolor"><span class="cardTitle">Formation initiale et continue</span></div>

        <div class="card-body cardBody">
            <div class="form-row justify-content-center">

                <div class="col">
                    <label class="col-sm-5 col-form-label text-right labelMarginTop2">Diplôme obtenu :</label>
                    <select class="selectFontSize2" required name="select">
                        <option>Aucun diplôme (Code 8 - Niv 5bis)</option>
                        <option>Beta</option>
                        <option>Delta</option>
                    </select>
                    <label class="col-sm-5 col-form-label text-right">Intitulé du dipôme :</label> <input class="input" type="text" name="fullname" size="26">
                </div>

                <div class="col">
                    <p class="text-center"><u>Formation initiale : </u></p>
                    <label class="col-sm-2 col-form-label text-right">Du</label> <input class="input" class="date" type="date" ><label class="text-Date">Au</label><input class="input" class="date" type="date"><br>
                    <label class="col-sm-2 col-form-label text-right">Du</label> <input class="input" class="date" type="date" ><label class="text-Date">Au</label><input class="input" class="date" type="date"><br>
                    <label class="col-sm-2 col-form-label text-right">Du</label> <input class="input" class="date" type="date" ><label class="text-Date">Au</label><input class="input" class="date" type="date"><br>
                </div>

                <div class="col">
                    <label class="col-sm-6 col-form-label text-right labelMarginTop3">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
                    <label class="col-sm-6 col-form-label text-right">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
                    <label class="col-sm-6 col-form-label text-right">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
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