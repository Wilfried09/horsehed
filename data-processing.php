<?php

include('connection.php');

if ($_POST['action'] == 'Inscription') {
    $dbLink = accessBDD();
    $today = date('Y-m-d');
    $query = "INSERT INTO user (identifiant,civilite,email,password,telephone,pays,date) VALUES (
              '" . $_POST['identifiant'] . "','" . $_POST['gender'] . "','" . $_POST['email'] . "', '" . $_POST['password'] .
        "', '" . $_POST['telephone'] . "', '" . $_POST['pays'] . "', '" . $today . "')";

    //remplacer $today par la réquête NOW()
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
    echo 'Bonjour, ' . $_POST['identifiant'] . '<br> Votre inscription a bien été enregistrée, merci.';
}