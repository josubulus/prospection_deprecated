<?php
$idEntreprise = intval($_GET['idEntreprise']);
$idUser = intval($_GET['idUser']);
$fiche = new Entreprise();
$fiche->companyData($idEntreprise,$idUser);
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
date_affich
statut
statut_mail
date_mail
notes
interret
id_membre
*/
 ?>
 <nav>
   <button id="lienFicheDonnees" type="button" name="button">Donnée Entreprise</button>
   <button id="lienFicheUpdate" type="button" name="button">Update Donnée entreprise</button>
 </nav>
 <!--  les contenu a traité en js  -->
<div id="ficheUpdate">
  <h2>okkkkkkkk</h2>
</div>
<div id="ficheDonnees">
  <h2>Fiche de l'entreprise : <?php echo htmlspecialchars($company['nom']); ?></h2>
  <h3>Status actuel de l'entreprise :<?php echo $fiche->companyStatus(); ?> </h3>
  <ul>
    <li>Activitée : <?php echo htmlspecialchars($company['activite']); ?></li>
    <li>Tel : <?php echo htmlspecialchars($company['tel']); ?></li>
    <li>Site de l'entreprise : <a href="<?php echo htmlspecialchars($company['site']); ?>" > <?php echo htmlspecialchars($company['site']); ?></a> </li>
    <li>Adresse : <?php echo htmlspecialchars($company['adresse']); ?></li>
    <li>Ajouté le : <?php echo htmlspecialchars($company['date_affich']); ?></li>
  </ul>
</div>
<div id="ficheContenu">
</div>
