<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Administration</span>
    </div>
    <div class="card-body">
        <nav class="navbar navbar-light bg-gradient-secondary btn">
            <a href="" class="btn btn-success"><p class="btn-text">Création de compte</p></a>
            <a href="" class="btn btn-success"><p class="btn-text">Modification de compte</p></a>
            <a href="" class="btn btn-success"><p class="btn-text">Suppression de compte</p></a>
        </nav>
        <table class="table">
            <thead>
            <tr class="tableAdmin">
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($liste as $row){?>
                <tr>
                    <th scope="row"><?php echo $row['idUtilisateur'];?></th>
                    <td><?php echo $row['Nom'];?></td>
                    <td><?php echo $row['Prenom'];?></td>
                    <td><?php echo $row['type'];?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>