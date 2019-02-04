<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horseshed - Home</title>
</head>
<?php

session_start();

if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
    echo 'Bienvenue';
}else{
    die('Erreur d\'authentification');
}
?>
</html>