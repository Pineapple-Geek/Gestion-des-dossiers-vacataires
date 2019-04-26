<div class="card">
    <div class="card-header cardcolor">
        <span class="cardTitle">Création de compte</span>
    </div>
    <div class="card-body">
        <form class="form-horizontal" action="<?php echo base_url('index.php/C_administrateur/validation'); ?>" method="post">
            <div class="form-row justify-content-center">
                <div class="col bg-light">
                    <label for="login" class="col-sm-5 col-form-label text-right">Login:</label> <input class="input" type="text" name="login" id="login" required><br>
                    <label for ="Password" class="col-sm-5 col-form-label text-right">Password:</label> <input class="input" type="password" name="Password" id="Password" required><br>
                    <label for ="Nom" class="col-sm-5 col-form-label text-right">Nom:</label> <input class="input" type="text" name="Nom" id="Nom" required><br>
                    <label for ="Prénom" class="col-sm-5 col-form-label text-right">Prénom:</label> <input class="input" type="text" name="Prénom" id="Prénom" required><br>
                    <label for ="type" class="col-sm-5 col-form-label text-right">Type de compte:</label>
                    <select id="type" name="type" >
                        <option value="Agent de paie">Agent de paie</option>
                    </select><br><br>
                </div>
            </div>
            <nav class="navbar navbar-light bg-gradient-secondary btn">
                <a href="<?php echo base_url('index.php/C_administrateur/'); ?>" class="btn btn-success" style="background: red; margin-right: 250px"><p class="btn-text">Annuler</p></a>
                <input  class="btn btn-success" type="submit" ><p class="btn-text"></p></input>
            </nav>
        </form>

    </div>
</div>