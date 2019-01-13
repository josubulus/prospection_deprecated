<?php
$fiche = new Entreprise();
$fiche->companyData($_GET['idEntreprise'],$_GET['idUser']);
$company = $fiche->getCompanyData();
//liste des champs :
/*
id
nom
tel
mail
site
adresse
activite
date_ajout
statut
statut_mail
date_mail
notes
interret
id_membre
*/
 ?>
<h2>Fiche de l'entreprise : <?php echo $company['nom']; ?></h2>
<ul>
  <li>Activitée : <?php echo $company['activite']; ?></li>
</ul>
