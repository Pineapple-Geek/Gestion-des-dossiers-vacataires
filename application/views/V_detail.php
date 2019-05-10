<div class="row">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>

        <div class="card-body cardBody">
            <form class="form-horizontal" action="<?php echo site_url("C_agent/validation"); ?>" method="post">
                <div class="form-row justify-content-center">
                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right">Nom:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Nom"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Nom de naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Nom_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Prénom:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Prenom"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Date de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Date_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Lieu de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Lieu_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Département de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Departement"]; ?></label>
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Adresse"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Ville"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Code_Postal"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Pays"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["N_Tel"]; ?></label>
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N° Sécurité Sociale:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["N_Securite_sociale"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right">Adresse mail académique:</label> <label class="col-sm-5 col-form-label text-left">
                            <?php 
                            if ($identite[0]["Adresse_Mail_Academique"] != null)
                            {
                                echo $identite[0]["Adresse_Mail_Academique"]; 
                            }
                            else
                            {
                                echo "(non communiqué)";
                            }
                            ?></label>
                        <label class="col-sm-6 col-form-label text-right">Adresse mail perso:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Adresse_Mail_Perso"]; ?></label>
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

                        <label class="col-sm-3 col-form-label text-right">Intervenants : </label><label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Intervenants"]; ?></label>
                    </div>
                </div>
                <fieldset id="formEtat">

                    <div class="form-row">

                    <div class="col"> 
                        <label class="col-sm-5 col-form-label text-right labelMarginLeft">Administratif : </label><label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Administratif"]; ?></label><br>
                    </div>

                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right">Statut : </label><label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Status"]; ?></label><br>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right">Catégorie : </label><label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Categorie"]; ?></label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p class="lieuAffect"><u> Lieu d'affectation principal :</u></p>
                        <label class="col-sm-4 col-form-label text-right labelMarginLeft2">Etablissement:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Etablissement"]; ?></label>
                    </div>
                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom">Ville:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Ville_E"]; ?></label>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Code Postal :</label> <label class="col-sm-4 col-form-label text-left"><?php echo $contrat[0]["Code_Postal_E"]; ?></label>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="card cardMargin">
            <div class="card-header cardcolor"><span class="cardTitle">Lettre d'engagement</span></div>

            <div class="card-body cardBody">
                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 1 - SE1 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Intitule_Action"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Centre"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Date_Debut"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Etablissement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Heure_Enseignement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Heure_Peripherique"]; ?></label><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Date_Fin"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Ville"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Taux"]; ?></label><br>

                    </div>

                </div>
                <?php if (count($lettre) == 2){?>

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 2 - SE2 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Intitule_Action"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Centre"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Debut"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Etablissement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Enseignement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Peripherique"]; ?></label><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Fin"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Ville"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Taux"]; ?></label><br>

                    </div>

                </div> 

                <?php } ?>

                <?php if (count($lettre) == 3){?>

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 2 - SE2 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Intitule_Action"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Centre"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Debut"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Etablissement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Enseignement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Peripherique"]; ?></label><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Fin"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Ville"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Taux"]; ?></label><br>

                    </div>

                </div> 

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 3 - SE3 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Intitule_Action"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Centre"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Date_Debut"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Etablissement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Heure_Enseignement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Heure_Peripherique"]; ?></label><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Date_Fin"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Ville"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Taux"]; ?></label><br>

                    </div>

                </div> 

                <?php } ?>
            </div>
        </div>

</div>

<div class="row">
    <div class="col-sm-1 offset-sm-11">
        <input type="submit" value="Suivant" class="inputcolor">
    </div>
</div>

</form>