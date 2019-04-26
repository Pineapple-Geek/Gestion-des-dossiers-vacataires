<script>
    function choix_modifier(){
        var radios = document.getElementsByName('modification'),
            value  = '';

        for (var i = radios.length; i--;) {
            if (radios[i].checked) {
                value = radios[i].value;
                break;
            }
        }

        location.href= "<?php echo base_url('index.php/C_administrateur/modification/');?>"+ value
    }

    function choix_supprimer(){
        var radios = document.getElementsByName('modification'),
            value  = '';

        for (var i = radios.length; i--;) {
            if (radios[i].checked) {
                value = radios[i].value;
                break;
            }
        }

        location.href= "<?php echo base_url('index.php/C_administrateur/suppression/');?>"+ value
    }
</script>

<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Administration</span>
    </div>

    <div class="card-body">
        <form class="navbar navbar-light bg-gradient-secondary btn">
            <a type="submit" style="background: #20B2AA" href="<?php echo base_url('index.php/C_administrateur/creation'); ?>" class="btn btn-success"><p class="btn-text">Création de compte</p></a>
            <a  type="submit" style="background: #20B2AA; color: whitesmoke" onclick="choix_modifier()"  class="btn btn-success"><p class="btn-text">Modification de compte</p></a>
            <a  type="submit" style="background: #20B2AA; color: whitesmoke" onclick="choix_supprimer()"  class="btn btn-success"><p class="btn-text">Suppression de compte</p></a><br><br><br>

            <table class="table">
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
        </form>
    </div>


</div>
