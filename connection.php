<?php

function accessBDD($dblogin, $dbpass, $sid)
{
    $IP = "172.30.67.151";
    $DBHOST = 'localhost';
    $DBNAME = 'Horseshed';
    $DBLOGIN = $dblogin;
    $DBPASS = $dbpass;

    $dbLink = mysqli_connect($DBHOST, $DBLOGIN, $DBPASS);
    if (mysqli_connect_errno()){
        playerConnect($sid);
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        mysqli_select_db($dbLink, $DBNAME);
        selectRole($DBLOGIN, $sid, $IP);
    }
    return $dbLink;
}

function searchBDD($dbLink,$query)
{
    if (!($dbResult = mysqli_query($dbLink, $query)) || !mysqli_fetch_object($dbResult)) {
        return false;
    }
    return true;

}

function playerConnect($SID){
    //Se connecter à la BDD et vérifier si les infos existent
    $request = "SELECT * FROM joueeur WHERE User='" . $_POST['identifiant'] . "' AND Password='" . $_POST['password']."'";

    if ($request) {
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

}

function selectRole($login, $sid, $ip){
    switch ($login){
        case "root":
            header("Location: root.php");
            break;
        case "noroot":
            header("Location: noroot.php");
            break;
        case "admin_priv":
            header("Location: admin_priv.php");
            break;
        case "resp_opt" :
            header("Location: responsable_opt.php");
            break;
        case "dev" :
            header("Location: developpeur.php");
            break;
        case "modo" :
            header("Location: moderateur.php");
            break;
        case "spe" :
            header("Location: http://".$ip."/index.php");
            break;
        case "admin_concours" :
            header("Location: administrateur_concours.php");
            break;
        case "editorialiste" :
            header("Location: editorialiste.php");
            break;
        default:
            header("Location: client.php?'.$sid");
    }
}
