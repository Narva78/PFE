<?php
$action= $_REQUEST['action'];
if($action == 'demandeInscription'){
    if($_POST['mdp']==$_POST['confirmMdp']){
        $pdo->formInscription($_POST['nom'], $_POST['prenom'],  $_POST['parcours'], $_POST['login'], $_POST['mdp'], $_POST['departement'], 
                    $_POST['promotion'], $_POST['email'], $_POST['sexe'], $_POST['hobbies'], $_POST['telephone']);
        include("vues/v_sommaire.php");
    }           
    else{
        echo "Les mots de passes ne sont pas identiques !";
        include("vues/v_inscription.php");
    }
}
?>