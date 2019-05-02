<div class="row">
    <div class="card">
        <div class="card-header cardcolor"><span class="cardTitle">Contrat & Statut</span></div>

        <div class="card-body cardBody">
            <form>
                <div class="form-row">
                    <div class="col-sm-7">
                        <h6 class="card-title cardBodyTitle">Fonction occupée : </h6>

                        <label class="col-sm-6 col-form-label text-right">Intervenants : </label>
                        <input type="radio" name="intervenants" value="Formateur" required><label>Formateur</label>
                        <input type="radio" name="intervenants" value="Conseiller bilan" required><label>Conseiller bilan</label>
                        <input type="radio" name="intervenants" value="Accompagnateur VAE" required><label>Accompagnateur VAE</label>

                        <label class="col-sm-6 col-form-label text-right">Administratif/autre personnel : </label>
                        <input type="text" name=""><br>
                        <label class="col-sm-6 col-form-label text-right">Statut : </label>
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
                        <label class="col-sm-6 col-form-label text-right">Catégorie : </label>
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
        </div>
    </div>
    <div class="card cardMargin">
        <div class="card-header cardcolor"><span class="cardTitle">Lettre d'engagement</span></div>

        <div class="card-body cardBody">
            <div class="form-row">

                <div class="col-sm-7">
                    <h6 class="card-title cardBodyTitle"><u>Action 1 - S1 :</u></h6>
                    <label class="col-sm-6 col-form-label text-right">Intitulé de l'action : </label>
                    <input type="text"><br>
                    <label class="col-sm-6 col-form-label text-right">Centre de production : </label>
                    <input type="text"><br>
                    <label class="col-sm-6 col-form-label text-right">Date de début : </label>
                    <input type="date"><br>
                    <label class="col-sm-6 col-form-label text-right">Etablissement : </label>
                    <input type="text"><br>
                    <label class="col-sm-6 col-form-label text-right">Nbre heures Enseignement : </label>
                    <input type="text"><br>
                    <label class="col-sm-6 col-form-label text-right">Nbre heures Périphérique : </label>
                    <input type="text"><br>
                </div>
                <div class="col-sm-5">
                    <label class="col-sm-6 col-form-label text-right niveauMargin">Niveau : </label>
                    <input type="text">
                    <label class="col-sm-6 col-form-label text-right datefinMargin">Date de fin : </label>
                    <input type="date"><br>
                    <label class="col-sm-6 col-form-label text-right">Ville : </label>
                    <input type="text"><br>
                    <label class="col-sm-6 col-form-label text-right">Taux horaire : </label>
                    <input type="text">
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-1">
        <input type="submit" value="Précédent" class="inputcolor">
    </div>
    <div class="col-sm-1 offset-sm-10">
        <input type="submit" value="Suivant" class="inputcolor">
    </div>
</div>

</form>