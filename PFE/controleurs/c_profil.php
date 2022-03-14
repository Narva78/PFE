<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUser = $_SESSION['id'];
switch($action){
	case 'consulterProfil':{
        $infoProfil =$pdo->getUser($idUser);
		include("vues/v_profil.php");
		break;
	}
    case 'modifierInfo':{
        include("vues/v_profil.php");
        break;
    }
}
?>