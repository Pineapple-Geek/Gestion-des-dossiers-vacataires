<form>
<div class="row">
    <div class="col bg-success"><h2>Identité </h2></div>
</div>
<div class="w-100">
    <div class="col">
    	<div class="form-row justify-content-center">
			<div class="col bg-light">
				<label id="Civilité">Civilité :</label> <input class="input" type="checkbox">Madame <input class="input" type="checkbox">Monsieur <br><br>
				<label for="nom" class="col-sm-2 col-form-label">Nom:</label> <input class="input" type="text" name="nom" id="nom" required><br><br>
				<label for ="nomNaiss" class="col-sm-2 col-form-label">Nom de naissance:</label> <input class="input" type="text" name="nomNaiss" id="nomNaiss" required><br><br>
				<label for="prenom" class="col-sm-2 col-form-label">Prénom:</label> <input class="input" type="text" name="prenom" id="prenom" required> <br><br>
				<label class="col-sm-2 col-form-label">Date de Naissance:</label> <input class="input" class="date" type="Date"> <br><br>
				<label class="col-sm-2 col-form-label">Lieu de Naissance:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label class="col-sm-2 col-form-label">Département de Naissance:</label> <input class="input" type="text" name="fullname">
			</div>
			
			<div class="col bg-light">
				<label>Adresse:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Ville:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Code Postal:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Pays:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>N°Tel:</label> <input class="input" type="text" name="fullname"> <br><br>
			</div>

			<div class="col bg-light">
				<label>N°INSEE + CLE:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Date de début d'activité:</label> <input class="input" class="date"type="date"> <br><br>
				<label>Adresse mail académique:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Adresse mail perso:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Nombre d'enfants:</label> <input class="input" type="text" name="fullname" >
			</div>

			<div class="col bg-light">
				<h4><u> Lieu d'affectation principal :</u> </h4>
				<label>Etablissement:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Ville:</label> <input class="input" type="text" name="fullname"> <br><br>
				<label>Code Postal :</label> <input class="input" type="text" name="fullname">
			</div>
		</div>
	</div>
  </div>
	<section >
		<header>
			<h2>Formation initiale et continue </h2>
		</header>
		<article>
				<label>Diplôme obtenu :</label>
				<select name="select"> 
					<option>Aucun diplôme (Code 8 - Niv 5bis)</option>
					<option>Beta</option>
					<option>Delta</option>
				</select> <br> <br>
				<label>Intitulé du dipôme :</label> <input class="input" type="text" name="fullname" size="26"> <br><br>


		</article>
		<article>
			<p class="format"><u>Formation initiale : </u></p>
			<label>Du</label>  <input class="input" class="date" type="date" ><label> Au </label><input class="input" class="date" type="date"> <br><br>
			<label>Du</label> <input class="input" class="date" type="date" > <label>Au</label> <input class="input" class="date" type="date"> <br><br>
			<label>Du</label><input class="input" class="date" type="date" ><label> Au </label><input class="input" class="date" type="date"> <br><br>
		</article>
		<article>
			<label>Intitulé de la formation :</label> <input class="input" type="text" name="fullname"> <br><br>
			<label>Intitulé de la formation :</label> <input class="input" type="text" name="fullname"> <br><br>
			<label>Intitulé de la formation :</label> <input class="input" type="text" name="fullname"> <br><br>
		</article>
	</section>


 	<input type="submit" value="Suivant">

  </form>