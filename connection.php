<?php

function accessBDD()
{
    $DBHOST = 'localhost';
    $DBNAME = 'dialemtri';
    $DBLOGIN = 'dialemtri';
    $DBPASS = 'dialemtri';

    $dbLink = mysqli_connect($DBHOST, $DBLOGIN, $DBPASS) or die('Erreur dans la connexion au serveur : ' . mysqli_error());
    mysqli_select_db($dbLink, $DBNAME);

    return $dbLink;

}

function searchBDD($dbLink,$query)
{
    if (!($dbResult = mysqli_query($dbLink, $query)) || !mysqli_fetch_object($dbResult)) {
        return false;
    }
    return true;

}
