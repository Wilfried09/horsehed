<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    Bonjour<hr>
    <ul>
        <li><a href="client.php?action=article">Article</a></li>
        <li><a href="client.php?action=concours">Concours</a></li>
    </ul>
    <hr>
    <?php
    if (! isset($_GET['action'])){
        $_GET['action']='article';
    }
    ?>

    La table <?php echo $_GET['action']; ?>

    <table>
        <tr>
        <?php
            switch($_GET['action']){
                case 'article':?>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Image</th>
                    <th>Type</th>
                    <?php
                    break;
                case 'concours':?>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Entrée(€)</th>
                    <th>Adhérent(€)</th>
                    <th>Circuit</th>
                    <th>Club</th>
                    <?php
                    break;
            }
        ?>
        </tr>
    </table>
</body>
</html>

<?php

