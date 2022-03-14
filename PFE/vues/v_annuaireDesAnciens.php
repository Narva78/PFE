<meta charset="utf-8" />
<form method="GET" action="index.php?uc=annuaireDesAnciens&action=recherche">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>

<?php 
if($nb > 0) { ?>
   <ul>
   <?php 
   foreach ($nbRecherche as $nR) { 
       var_dump($nb, $nbRecherche); ?>
      <li><?php $nR['nom'] ?></li>
<?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?php $nbRecherche ?><?php $q?>...
<?php } ?>
