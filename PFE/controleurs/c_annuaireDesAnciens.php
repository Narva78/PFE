<?php
$action= $_REQUEST['action'];
$nbRecherche ="";
$q="e";
if($action == 'recherche'){
    if(isset($q) AND !empty($q)){
        $nbRecherche = $pdo->barreDeRecherche1($q);
        $nb = count($nbRecherche);
        if ($nb == 0){
            $nbRecherche = $pdo->barreDeRecherche2($q);
        }
    }
    include("vues/v_annuaireDesAnciens.php");
}
?>