<?php

session_start();
$SID=session_id();
include('connection.php');

if(isset($_POST['identifiant']) && isset($_POST['password'])) {
    //Se connecter à la BDD et vérifier si les infos existent
    $request = "SELECT * FROM user WHERE identifiant='" . $_POST['identifiant'] . "' AND password='" . $_POST['password']."'";

    $con = accessBDD();
    $result = searchBDD($con,$request);

    if ($result) {
        $_SESSION['login']='ok';
        $_SESSION['identifiant']=$_POST['identifiant'];
        $_SESSION['password']=$_POST['password'];
        $_GET['step']='LOGIN';
        header('Location:welcome.php?'.$SID);
    } else {
        $_SESSION=array();
        //print_r($_SESSION);
        header("Location: login.php?step=ERREUR");
    }
}else{
    $_SESSION=array();
    //$_GET['step']='ERREUR';
    header("Location: login.php?step=ERREUR");
}
