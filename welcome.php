<?php

session_start();

if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
    echo 'Bienvenue';
}else{
    die('Erreur d\'authentification');
}
