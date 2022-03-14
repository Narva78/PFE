<?php
function estConnecte(){
  return isset($_SESSION['id']);
}

function connecter($id,$nom,$prenom, $IsAdmin){
	$_SESSION['id']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
	$_SESSION['IsAdmin']= $IsAdmin;
}

function deconnecter(){
	session_destroy();
}

function ajouterErreur($msg){
	if (! isset($_REQUEST['erreurs'])){
	   $_REQUEST['erreurs']=array();
	 } 
	$_REQUEST['erreurs'][]=$msg;
 }
?>