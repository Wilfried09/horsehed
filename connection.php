<?php

function accessBDD()
{
    $DBHOST = '172.30.119.223';
    $DBNAME = 'Horseshed';
    $DBLOGIN = 'root';
    $DBPASS = 'root';

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
