<div class="row">
<div class="card">
<div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>

    <div class="card-body">
    	<form class="form-horizontal">
    	<div class="form-row justify-content-center">
			<div class="col bg-light">
				<label id="Civilité" class="col-sm-6 col-form-label">Civilité :</label> <input class="input" type="checkbox">Madame</input> <input class="input" type="checkbox">Monsieur</input>
				<label for="nom" class="col-sm-6 col-form-label">Nom:</label> <input class="input" type="text" name="nom" id="nom" required>
				<label for ="nomNaiss" class="col-sm-6 col-form-label">Nom de naissance:</label> <input class="input" type="text" name="nomNaiss" id="nomNaiss" required>
				<label for="prenom" class="col-sm-6 col-form-label">Prénom:</label> <input class="input" type="text" name="prenom" id="prenom" required> 
				<label class="col-sm-6 col-form-label">Date de Naissance:</label> <input class="input" class="date" type="Date"> 
				<label class="col-sm-6 col-form-label">Lieu de Naissance:</label> <input class="input" type="text" name="fullname"> 
				<label class="col-sm-6 col-form-label">Département de Naissance:</label> <input class="input" type="text" name="fullname">
				<br><br>
				<p><u> Lieu d'affectation principal :</u> </p>
				<label class="col-sm-6 col-form-label">Etablissement:</label> <input class="input" type="text" name="fullname">
			</div>
			
			<div class="col bg-light">
				<label class="col-sm-4 col-form-label labelMarginTop">Adresse:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-4 col-form-label">Ville:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-4 col-form-label">Code Postal:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-4 col-form-label">Pays:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-4 col-form-label">N°Tel:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-4 col-form-label labelMarginBottom">Ville:</label> <input class="input" type="text" name="fullname">
			</div>

			<div class="col bg-light">
				<label class="col-sm-6 col-form-label labelMarginTop">N°INSEE + CLE:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-6 col-form-label">Date de début d'activité:</label> <input class="input" class="date"type="date">
				<label class="col-sm-6 col-form-label">Adresse mail académique:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-6 col-form-label">Adresse mail perso:</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-6 col-form-label">Nombre d'enfants:</label> <input class="input" type="text" name="fullname" >
				<label class="col-sm-6 col-form-label labelMarginBottom">Code Postal :</label> <input class="input" type="text" name="fullname">
			</div>
		</div>
	</div>
</div>
<div class="card cardMargin">
	<div class="card-header cardcolor"><span class="cardTitle">Formation initiale et continue</span></div>

	    <div class="card-body">
	    	<div class="form-row justify-content-center">

				<div class="col bg-light">
					<label class="col-sm-4 col-form-label labelMarginTop2">Diplôme obtenu :</label>
					<select name="select"> 
						<option>Aucun diplôme (Code 8 - Niv 5bis)</option>
						<option>Beta</option>
						<option>Delta</option>
					</select>
					<label class="col-sm-4 col-form-label">Intitulé du dipôme :</label> <input class="input" type="text" name="fullname" size="26"> 
				</div>

				<div class="col bg-light">
				<p><u>Formation initiale : </u></p>
				<label>Du</label> <input class="input" class="date" type="date" ><label>Au</label><input class="input" class="date" type="date"><br> 
				<label>Du</label> <input class="input" class="date" type="date" ><label>Au</label><input class="input" class="date" type="date"><br> 
				<label>Du</label> <input class="input" class="date" type="date" ><label>Au</label><input class="input" class="date" type="date"><br> 
				</div>

				<div class="col bg-light">
				<label class="col-sm-5 col-form-label labelMarginTop3">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-5 col-form-label">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
				<label class="col-sm-5 col-form-label">Intitulé de la formation :</label> <input class="input" type="text" name="fullname">
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