<?php if (isset($_SESSION["loginok"]) && ($_SESSION["loginok"]["type"] == "Administrateur")) { // si la session n'est pas connectée, afficher le formulaire de connexion'?>


<?php } else { redirect('C_connexion','refresh'); }?>
