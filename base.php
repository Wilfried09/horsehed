<?php

$DBHOST = 'localhost';
$DBNAME = 'dialemtri';
$DBLOGIN = 'dialemtri';
$DBPASS = 'dialemtri';

$dbLink = mysqli_connect($DBHOST, $DBLOGIN, $DBPASS) or die('Erreur dans la connexion au serveur : ' . mysqli_error());
mysqli_select_db($dbLink, $DBNAME);

$query = 'SELECT id, email, date FROM user';

if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

while ($dbRow = mysqli_fetch_object($dbResult)) {
    echo $dbRow->id . '<br/>';
    echo $dbRow->email . '<br/>';
    echo date('d.m.Y', strtotime($dbRow->date)) . '<br/>'; // $dbRow->date
    echo '<br/><br/>';
}


