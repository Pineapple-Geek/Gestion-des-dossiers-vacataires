<form method="post"  action="<?php if (isset($_POST['Précédent'])) {echo base_url('index.php/C_lettre/retour');} if (isset($_POST['Suivant'])){echo base_url('index.php/C_lettre/validation');}?>">
    <div class="row">
        <div class="card cardMargin">
            <div class="card-header cardcolor"><span class="cardTitle">Lettre d'engagement</span></div>

            <div class="card-body cardBody">
                <div class="form-row">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 1 - S1 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label>
                        <input type="text" name="IntAction"><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label>
                        <input type="text" name="CentreProduct"><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label>
                        <input type="date" name="DateFin"><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label>
                        <input type="text" name="Etablissement"><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label>
                        <input type="text" name="HeureEnseignement"><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label>
                        <input type="text" name="HeurePeripherique" ><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label>
                        <input type="text" name="Niveau">
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label>
                        <input type="date" name="DateFin"><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label>
                        <input type="text" name="Ville"><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label>
                        <input type="text" name="TauxHoraire">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">
            <input type="submit" name="Précédent" value="Précédent" class="inputcolor">
        </div>
        <div class="col-sm-1 offset-sm-10">
            <input type="submit" name="Suivant" value="Suivant" class="inputcolor" >
        </div>
    </div>

</form>