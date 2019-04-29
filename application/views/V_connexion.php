<div class="col-sm-4 offset-sm-4">
<div class="card" >
    <div class="card-header cardcolor">
        <span class="cardTitle">Connexion</span>
    </div>
    <div class="card-body">
        <form class="form-horizontal" action="<?php echo site_url('C_connexion/validation'); ?>" method="post">
            <div class="form-row justify-content-center">
                <div class="col ">
                    <label for="login" class="col-sm-6 col-form-label text-right" >Login:</label> <input class="input" type="text" name="login" id="login" placeholder="Entrer votre login" required><br>
                    <label for="mdp" class="col-sm-6 col-form-label text-right">Mots de passe:</label> <input class="input" type="text" name="mdp" id="mdp" placeholder="Entrer votre mots de passe" required><br>
                    <nav class="navbar navbar-light bg-gradient-secondary btn">
                        <input  class="btn btn-success" type="submit" style="margin: auto"><p class="btn-text"></p></input>
                    </nav>
                </div>
            </div>
        </form>
    </div>
</div>
</div>