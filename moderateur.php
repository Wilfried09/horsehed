<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administrateur privilèges</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<ul>
    <li><a href="admin_priv.php?action=utilisateur">Utilisateurs</a></li>
    <li><a href="admin_priv.php?action=groupe">Groupes</a></li>
</ul>

<?php
if (! isset($_GET['action'])){
    $_GET['action']='utilisateur';
}
?>

La table <?php echo $_GET['action']; ?>
<table class="admin_priv">
    <tr>
        <td>
            <?php
            if($_GET['action']=='utilisateur'){
                echo "Nom";
            }elseif($_GET['action']=='groupe'){
                echo "Libellé";
            };
            ?>
        </td>
        <td>
            <?php
            if($_GET['action']=='utilisateur'){
                echo "Prénom";
            }elseif($_GET['action']=='groupe'){
                echo "Permissions";
            };
            ?>
        </td>
        <td>
            <?php
            if($_GET['action']=='utilisateur'){
                echo "Permissions";
            };
            ?>
        </td>
    </tr>
</table>
</body>
</html>

<?php

