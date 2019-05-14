<div class="row">
<form class="form-horizontal">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Identité</span></div>
        <div class="card-body cardBody">
            <form class="form-horizontal" action="<?php echo site_url("C_agent/validation"); ?>" method="post">
                <div class="form-row justify-content-center">
                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right">Nom:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Nom"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation1" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation1" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right">Nom de naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Nom_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation1" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation1" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right">Prénom:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Prenom"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation3" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation3" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right">Date de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Date_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation4" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation4" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right">Lieu de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Lieu_Naissance"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation5" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation5" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right">Département de Naissance:</label> <label class="col-sm-4 col-form-label text-left"><?php echo $identite[0]["Departement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation6" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation6" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>

                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginTop">Adresse:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Adresse"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation7" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation7" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-4 col-form-label text-right">Ville:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Ville"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation8" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation8" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-4 col-form-label text-right">Code Postal:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Code_Postal"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation9" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation9" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-4 col-form-label text-right">Pays:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["Pays"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation10" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation10" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-4 col-form-label text-right">N°Tel:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["N_Tel"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation11" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation11" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>

                    <div class="col">
                        <label class="col-sm-6 col-form-label text-right labelMarginTop">N° Sécurité Sociale:</label> <label class="col-sm-5 col-form-label text-left"><?php echo $identite[0]["N_Securite_sociale"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation12" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation12" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
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
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation13" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation13" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                </div>
        </div>
    </div>

    <div class="card cardMargin">
        <div class="card-header cardcolor"><span class="cardTitle">Contrat & Statut</span></div>

        <div class="card-body cardBody">
                <div class="form-row">
                    <div class="col-sm-5">
                        <h6 class="card-title cardBodyTitle">Fonction occupée : </h6>

                        <label class="col-sm-5 col-form-label text-right">Intervenants : </label><label class="col-sm-3 col-form-label text-left"><?php echo $contrat[0]["Intervenants"]; ?></label>
                        <label class="col-sm-5 col-form-label text-right"></label><span class="validationStyle"><input name="validation14" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation14" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                </div>
                <fieldset id="formEtat">

                    <div class="form-row">

                    <div class="col"> 
                        <label class="col-sm-6 col-form-label text-right">Administratif : </label><label class="col-sm-5 col-form-label text-left"><?php echo $contrat[0]["Administratif"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation15" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation15" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>

                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right">Statut : </label><label class="col-sm-9 col-form-label text-left"><?php echo $contrat[0]["Status"]; ?></label>
                        <label class="col-sm-3 col-form-label text-right"></label><span class="validationStyle"><input name="validation16" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation16" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right">Catégorie : </label><label class="col-sm-8 col-form-label text-left"><?php echo $contrat[0]["Categorie"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right"></label><span class="validationStyle"><input name="validation17" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation17" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p class="lieuAffect"><u> Lieu d'affectation principal :</u></p>
                        <label class="col-sm-4 col-form-label text-right labelMarginLeft2">Etablissement:</label> <label class="col-sm-7 col-form-label text-left"><?php echo $contrat[0]["Etablissement"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right"></label><span class="validationStyle"><input name="validation18" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation18" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                    <div class="col">
                        <label class="col-sm-3 col-form-label text-right labelMarginBottom">Ville:</label> <label class="col-sm-8 col-form-label text-left"><?php echo $contrat[0]["Ville_E"]; ?></label>
                        <label class="col-sm-3 col-form-label text-right"></label><span class="validationStyle"><input name="validation19" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation19" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                    <div class="col">
                        <label class="col-sm-4 col-form-label text-right labelMarginBottom">Code Postal :</label> <label class="col-sm-7 col-form-label text-left"><?php echo $contrat[0]["Code_Postal_E"]; ?></label>
                        <label class="col-sm-4 col-form-label text-right"></label><span class="validationStyle"><input name="validation20" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation20" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
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
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Intitule_Action"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation21" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation21" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Centre"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation22" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation22" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Date_Debut"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation23" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation23" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Etablissement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation24" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation24" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Heure_Enseignement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation25" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation25" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Heure_Peripherique"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation26" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation26" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation27" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation27" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Date_Fin"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation28" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation28" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Ville"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation29" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation29" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[0]["Taux"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation30" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation30" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>

                    </div>

                </div>
                <?php if (count($lettre) == 2){?>

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 2 - SE2 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Intitule_Action"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation31" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation31" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Centre"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation32" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation32" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Debut"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation33" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation33" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Etablissement"]; ?></label><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Enseignement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation34" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation34" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Peripherique"]; ?></label
                            <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation35" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation35" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation36" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation36" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Fin"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation37" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation37" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Ville"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation38" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation38" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Taux"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation39" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation39" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>

                    </div>

                </div> 

                <?php } ?>

                <?php if (count($lettre) == 3){?>

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 2 - SE2 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Intitule_Action"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation40" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation40" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Centre"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation41" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation41" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Debut"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation42" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation42" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Etablissement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation43" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation43" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Enseignement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation44" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation44" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Heure_Peripherique"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation45" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation45" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation46" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation46" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Date_Fin"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation47" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation47" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Ville"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation48" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation48" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[1]["Taux"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation49" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation49" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>

                    </div>

                </div> 

                <div class="form-row" id="formulaire">

                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle"><u>Action 3 - SE3 :</u></h6>
                        <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label> <label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Intitule_Action"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation50" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation50" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Centre de production : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Centre"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation51" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation51" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Date de début : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Date_Debut"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation52" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation52" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Etablissement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Etablissement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation53" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation53" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Heure_Enseignement"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation54" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation54" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Heure_Peripherique"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation55" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation55" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                    </div>
                    <div class="col-sm-5">
                        <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Niveau"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation56" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation56" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                        <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Date_Fin"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation56" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation56" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Ville : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Ville"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation57" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation57" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>
                        <label class="col-sm-6 col-form-label text-right">Taux horaire : </label><label class="col-sm-4 col-form-label text-left"><?php echo $lettre[2]["Taux"]; ?></label>
                        <label class="col-sm-6 col-form-label text-right"></label><span class="validationStyle"><input name="validation58" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation58" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span><br>

                    </div>

                </div> 

                <?php } ?>
            </div>
        </div>

        <div class="card cardMargin">
            <div class="card-header cardcolor"><span class="cardTitle">Document à fournir</span></div>
            <div class="card-body cardBody">

                <div class="card-group">

                  <div class="card">
                    <img id="myImg1" class="card-img-top img-responsive img-thumbnail" src="<?php echo base_url($document[0]["Chemin"]); ?>">
                    <div class="card-body">
                      <h6 class="card-title">Relevé d'identité bancaire ou postal</h6>
                      <label class="col-sm-2 col-form-label text-right"></label><span class="validationStyle"><input name="validation59" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation59" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                  </div>

                  <div class="card">
                    <img id="myImg2" class="card-img-top img-responsive img-thumbnail" src="<?php echo base_url($document[1]["Chemin"]); ?>">
                    <div class="card-body">
                      <h6 class="card-title">Copie de l'attestation de sécurité sociale</h6>
                      <label class="col-sm-2 col-form-label text-right"></label><span class="validationStyle"><input name="validation60" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation60" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                  </div>

                  <div class="card">
                    <img id="myImg3" class="card-img-top img-responsive img-thumbnail" src="<?php echo base_url($document[2]["Chemin"]); ?>">
                    <div class="card-body">
                      <h6 class="card-title">Copie recto verso de la carte d'identité</h6>
                      <label class="col-sm-2 col-form-label text-right"></label><span class="validationStyle"><input name="validation61" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation61" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                  </div>

                  <div class="card">
                    <img id="myImg4" class="card-img-top img-responsive img-thumbnail" src="<?php echo base_url($document[3]["Chemin"]); ?>">
                    <div class="card-body">
                      <h6 class="card-title">Curriculum mis à jour</h6>
                      <label class="col-sm-2 col-form-label text-right"></label><span class="validationStyle"><input name="validation62" type="radio" value="Valide" onclick="HiddenDIV();" required>Valide</input> <input name="validation62" type="radio" value="NonValide" onclick="ShowDIV();" required>Non Valide</input></span>
                    </div>
                  </div>

                </div>
            </div>
            <input id="ErrorStat" name="ErrorStat" type="hidden" value="0">
        </div>
        <div class="hiddenDiv" id="hiddenDiv">
            <div class="card cardMargin">
                <div class="card-header cardcolor"><span class="cardTitle">Erreur du dossier</span></div>
                <div class="card-body cardBody">
                    <div class="form-row">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Type:</label> <input class="input form-control" type="text" name="TypeE">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Description:</label> <textarea class="input form-control" type="text" name="DescE" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<div class="row">
        <div class="col-sm-1">
            <button type="button" name="Annuler" class="inputcolor" onclick="location.href='<?php echo site_url('C_agent'); ?>'">Annuler</button>
        </div>
        <div class="col-sm-1 offset-sm-10">
            <input type="submit" id="Valider" value="Valider" name="Suivant" class="inputcolor">
        </div><br><br>
</div>

<div id="myModal" class="modal">
  <span class="closeIMG">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('hiddenDiv');
var errorStat = document.getElementById('ErrorStat');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
img4.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeIMG")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

function HiddenDIV(){
    modal2.style.display = "none";
    errorStat.value = 0;
}

function ShowDIV(){
    modal2.style.display = "flex";
    errorStat.value = 1;
}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("/assets"); ?>/js/headroom.min.js"></script>
<script src="<?php echo base_url("/assets"); ?>/js/jQuery.headroom.min.js"></script>
<script src="<?php echo base_url("/assets"); ?>/js/template.js"></script>

</form>