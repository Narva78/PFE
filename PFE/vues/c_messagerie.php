<?php
include("vues/v_sommaire.php");
$pseudo=$_POST['pseudo'];
$message=$_POST['message'];
switch($action){
	case 'messagerie':{
        $insererMessage = $pdo->insererMessage($pseudo, $message);
		$recupMessages = $pdo->recupMessages();  
		include("vues/v_messagerie.php");
		break;
	}
}
?>
