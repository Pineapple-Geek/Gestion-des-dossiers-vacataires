<script>
    function recherche()
    {
        var value = document.getElementById('search_bar').value;
        location.href = "recherche/"+ value;
    }


</script>

<?php if (isset($_SESSION["loginok"]) && ($_SESSION["loginok"]["type"] == "Agent de paie")) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>
    <div class="card">
        <div class="card-header cardcolor">
            <span class="cardTitle">Choix du dossier</span>
        </div>

        <div class="card-body">
            <nav class="navbar navbar-light bg-gradient-secondary btn">
                <form class="form-inline ">
                    <input class="form-control form-control-sm searchbar" onkeypress=" if(event.key === 'Enter') recherche()"  id="search_bar" type="text" placeholder="Recherche par nom" aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
            </nav>
            <table class="table tableSize">
                <thead>
                <tr class="tableAdmin">
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Vérification</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($liste as $row ){;?>
                    <tr>
                        <td><?php echo $row['id_Identite'];?></td>
                        <td><?php echo $row['Nom'];?></td>
                        <td><?php echo $row['Prenom'];?></td>
                        <td><?php echo $row['Type'];?></td>
                        <td><a href="<?php echo base_url('index.php/C_agent/detail/') .$row['id_Identite'];?>" class="btn btn-outline-secondary">Détail</a> </td>
                    </tr>

                <?php }?>
                </tbody>
            </table>
        </div>
    </div>

<?php } else { redirect('C_connexion','refresh'); }?>
