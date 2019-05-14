<script>
    $(document).ready(function(){
        var i =1;
        $('#ajouter').click(function(){
            i++;

            if(i==3){
                var bouton = document.getElementById('ajouter');
                bouton.style.visibility='hidden';
            }
            if (i<4){
                $('#formulaire').append('<div class="col-sm-7"><h6 class="card-title cardBodyTitle"><br><u>Action '+i+' - SE'+i+' :</u></h6>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Intitulé de l\'action : </label><input type="text" name="IntAction'+i+'" required><br>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Centre de production : </label><input type="text" name="CentreProduct'+i+'" required><br>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Date de début : </label><input type="date" name="DateFin'+i+'" required><br>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Etablissement : </label><input type="text" name="Etablissement'+i+'" required><br>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Nombre heures Enseignement : </label><input type="number" name="HeureEnseignement'+i+'" required><br>\n' +
                    '<label class="col-sm-6 col-form-label text-right">Nombre heures Périphérique : </label><input type="number" name="HeurePeripherique'+i+'" required><br>\n' +
                    '</div><div class="col-sm-5"><label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label>\n' +
                    '<input type="number" name="Niveau'+i+'" required><label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label>\n' +
                    '<input type="date" name="DateFin'+i+'" required><br><label class="col-sm-6 col-form-label text-right">Ville : </label>\n' +
                    '<input type="text" name="Ville'+i+'" required><br><label class="col-sm-6 col-form-label text-right">Taux horaire : </label>\n' +
                    '<input type="number" name="TauxHoraire'+i+'" required><br><br></div>');
            }

        });

    });
</script>

<form method="post"  action="<?php echo base_url('index.php/C_lettre/validation'); ?>">
    <div class="row">
        <div class="card cardMargin">
            <div class="card-header cardcolor"><span class="cardTitle">Lettre d'engagement</span></div>

            <div class="card-body cardBody">
                <button type="button" name="ajouter" id="ajouter" class="inputcolor">Ajouter</button>
                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 1 - SE1 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label>
                        <input type="text" name="IntAction1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label>
                        <input type="text" name="CentreProduct1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label>
                        <input type="date" name="DateDebut1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label>
                        <input type="text" name="Etablissement1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Nombre heures Enseignement : </label>
                        <input type="number" name="HeureEnseignement1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Nombre heures Périphérique : </label>
                        <input type="number" name="HeurePeripherique1" required><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label>
                        <input type="number" name="Niveau1" required>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label>
                        <input type="date" name="DateFin1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label>
                        <input type="text" name="Ville1" required><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label>
                        <input type="number" name="TauxHoraire1" required><br>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">
            <button type="button" name="Précédent" class="inputcolor" onclick="location.href='C_identite'">Précédent</button>
        </div>
        <div class="col-sm-1 offset-sm-10">
            <input type="submit" name="Suivant" value="Suivant" class="inputcolor" >
        </div>
    </div>

</form>