<?php
require_once("fonction/fct.inc.php");
require_once ("fonction/class.pdo.php");
include("vues/v_header.php");
session_start();
$pdo = PdoTest::getPdoTest();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	case 'profil' :{
		include("controleurs/c_profil.php");
		break;
	}
	case 'inscription':{
		include("controleurs/c_inscription.php");
		break;
	}
	case 'annuaireDesAnciens' :{
		include("controleurs/c_annuaireDesAnciens.php");
		break; 
	}
	case 'messagerie' :{
		include("controleurs/c_messagerie.php");
		break; 
	}
}
include("vues/v_footer.php");
?>