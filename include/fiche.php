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
  <h2>eeduueuuezuemqhshdm</h2>
</div>
<div id="ficheDonnees">
  <h2>Fiche de l'entreprise : <?php echo htmlspecialchars($company['nom']); ?></h2>
  <p>
    <?php
    // le passé en post.php pensé au header get pour récupéré la page au retour
    // refaire de formulaire en class
    if (isset($_POST['statut']) && ($_POST['statut'])) {
      $fiche->companyUpdateStatut(intval($_POST['statut']));            // code...
    } ?>
        <h3>Status actuel de l'entreprise :</h3>
            <form  action="#" method="post">
              <?php
                  $statutModif = [];
                  $statutModif = new Form();
                  $statutModif->select('statut', $contenu = [1 => 'A Demarcher', 2 => 'OK ! ', 3 => 'attente réponse', 4 =>'Refusé'], $company['statut']);
                  echo $statutModif->submit('Enregistrer');
              /*echo $fiche->companyStatut();*/
              ?>
            </form>


  </p>
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
