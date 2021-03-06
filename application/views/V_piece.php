<form action="http://localhost/vacataires/index.php/C_piece/upload_file" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row">
        <div class="card">
            <div class="card-header cardcolor"><span class="cardTitle">Document à fournir</span></div>
            <div class="card-body cardBody">

                <div class="d-inline-block col-sm-3 text-right">
                    <p class="card-text"><img class="cardImageValid" src="<?php echo base_url("/assets/images/"); ?>valider.png"></p>
                    <p class="card-text"><img class="cardImageValid" src="<?php echo base_url("/assets/images/"); ?>valider.png"></p>
                    <p class="card-text"><img class="cardImageValid" src="<?php echo base_url("/assets/images/"); ?>valider.png"></p>
                    <p class="card-text"><img class="cardImageValid" src="<?php echo base_url("/assets/images/"); ?>valider.png"></p>
                    <?php if (isset($_SESSION["contrat"])){
                        if (in_array('Enseignant', $_SESSION["contrat"])){?>
                            <p class="card-text"><img class="cardImageValid" src="<?php echo base_url("/assets/images/"); ?>valider.png"></p>
                    <?php }} ?>


                </div>

                <div class="d-inline-block col-sm-4">
                    <p class="card-text cardTextMargin">Un relevé d'identité bancaire ou postal</p>
                    <p class="card-text cardTextMargin">Une copie de l'attestation de sécurité sociale</p>
                    <p class="card-text cardTextMargin">Une copie recto verso de la carte d'identité</p>
                    <p class="card-text cardTextMargin">Un curriculum mis à jour</p>
                    <?php if (isset($_SESSION["contrat"])){
                        if (in_array('Enseignant', $_SESSION["contrat"])){?>
                            <p class="card-text cardTextMargin">Accord de cumul d’activités</p>
                        <?php }} ?>
                </div>

                <div class="d-inline-block col-sm-2 text-left">
                    <p class="card-text cardTextMargin2"><input class="ajouter" type="file" name="userfile1" required></p>
                    <p class="card-text cardTextMargin2"><input class="ajouter" type="file" name="userfile2" required></p>
                    <p class="card-text cardTextMargin2"><input class="ajouter" type="file" name="userfile3" required></p>
                    <p class="card-text cardTextMargin2"><input class="ajouter" type="file" name="userfile4" required></p>
                    <?php if (isset($_SESSION["contrat"])){
                        if (in_array('Enseignant', $_SESSION["contrat"])){?>
                            <p class="card-text cardTextMargin2"><input class="ajouter" type="file" name="userfile5" required></p>
                        <?php }} ?>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="card cardMargin cardcolor cardText">
            <div class="card-body cardBody2">
                <p>Les informations recueillies font l'objet d'un traitement informatique destinée à rédiger votre contrat de travail et assurer le suivi de l'activité du GRETA.
                    Les destinataires des données sont le service de paye; le service des ressources humaines.
                    Conformément à la loi "informatique et libertés" , vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent.
                    Si vous souhaitez exercer ce droit et obtenir communication des informations vous concernant, veuillez vous adresser au service ressources humaines.
                    Vous pouvez également, pour des motifs légitimes , vous opposez au traitement des données vous concernant.</p><br>
                Pour plus d'information veuillez contacter <a href="mailto: paie.gretagrandhainault@ac-lille.fr" target="_top">paie.gretagrandhainault@ac-lille.fr</a>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="card cardMargin">
            <div class="card-body cardBody">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" required>
                    <label class="col-md-8 form-check-label labelWeight" for="defaultCheck1">
                        En cochant cette case je déclare sur l'honneur l'exactitude  des renseignements que j'ai fournis.
                    </label>
                </div>

                <div class="form-group row">
                    <label class="labelSize col-form-label text-right">Je soussigné(e):</label>
                    <div class="col-sm-2">
                        <input type="text" name="Soussigne" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="labelSize col-form-label text-right">Date:</label>
                    <div class="col-sm-2">
                        <input type="date" name="Date" class="form-control" required>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">
            <button type="button" name="Précédent" class="inputcolor" onclick="location.href='C_lettre'">Précédent</button>
        </div>
        <div class="col-sm-1 offset-sm-10">
            <input type="submit" id="Suivant" value="Suivant" name="Suivant" class="inputcolor">
        </div><br><br>
    </div>
</form>

<?php
if(isset($_SESSION["identite"]) && isset($_SESSION["lettre1"]))
{
    ?> <script type="text/javascript"> document.getElementById('Suivant').type = "submit"; </script> <?php
}
else
{
    ?> <script type="text/javascript"> document.getElementById('Suivant').type = "hidden"; </script> <?php

    if (isset($_SESSION["identite"]))
    {
        echo '<script type="text/javascript">alert("Le formulaire \"Lettre d\'engagement\" et statut doit être remplis!");</script>';
    }
    else if (isset($_SESSION["lettre1"]))
    {
        echo '<script type="text/javascript">alert("Le formulaire Identité / Contrat et statut doit étre remplis!");</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Le formulaire \"Identité / Contrat et statut\" et \"Lettre d\'engagement\" doit être remplis!");</script>';
    }
}
?>