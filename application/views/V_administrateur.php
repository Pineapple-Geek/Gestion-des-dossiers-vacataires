<?php if (isset($_SESSION["loginok"]) && ($_SESSION["loginok"]["type"] == "Administrateur")) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>
<script>
    function choix_modifier(){
        var radios = document.getElementsByName('modification'),
            value  = '';

        for (var i = radios.length; i--;) {
            if (radios[i].checked) {
                 value = radios[i].value;
                location.href= "<?php echo base_url('index.php/C_administrateur/modification/');?>"+ value;
                break;
            }
        }
    }

    function choix_supprimer(){
        var radios = document.getElementsByName('modification'),
            value  = '';

        for (var i = radios.length; i--;) {
            if (radios[i].checked) {
                 value = radios[i].value;
                 location.href= "<?php echo base_url('index.php/C_administrateur/suppression/');?>"+ value;
                 break;
            }
        }
    }
</script>

<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Administration</span>
    </div>

    <div class="card-body">
        <nav class="navbar navbar-light bg-gradient-secondary btn">
            <a href="<?php echo base_url('index.php/C_administrateur/creation'); ?>" class="btn btn-success navButtonStyle"><p class="btn-text">Création de compte</p></a>
            <a onclick="choix_modifier()"  class="btn btn-success navButtonStyle"><p class="btn-text">Modification de compte</p></a>
            <a onclick="choix_supprimer()"  class="btn btn-success navButtonStyle"><p class="btn-text">Suppression de compte</p></a><br><br><br>
        </nav>

        <table class="table tableSize">
                <thead>
                <tr class="tableAdmin">
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Selection</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($liste as $row){?>
                    <tr>
                        <th scope="row"><?php echo $row['idUtilisateur'];?></th>
                        <td><?php echo $row['Nom'];?></td>
                        <td><?php echo $row['Prenom'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><input type="radio" id="<?php echo $row['idUtilisateur']; ?>" name="modification" value="<?php echo $row['idUtilisateur']; ?>" </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
    </div>


</div>
<?php } else { redirect('C_connexion','refresh'); }?>