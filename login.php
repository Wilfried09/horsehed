<?php

if (!isset($_GET['step'])){
    header("Location: login.php?step=LOGIN");
}else{
    if ($_GET['step']=='ERREUR'){
        echo 'Identifiant ou Mot de passe erroné <br>';
    }
    ?>
    <form action="test-pass.php" method="post">
        Identifiant : <input type="text" name="identifiant"/><br>
        Mot de passe : <input type="password" name="password"/><br>
        <input type="submit" name="login" value="Connexion"/><br>
    </form>
    <?php
}
?>

