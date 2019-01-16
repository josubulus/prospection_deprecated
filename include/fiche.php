<?php
$idEntreprise = intval($_GET['idEntreprise']);
$idUser = intval($_GET['idUser']);
$fiche = new Entreprise();
$fiche->companyData($idEntreprise,$idUser);
$company = $fiche->getCompanyData();
$_SESSION['id_entreprise'] = $company['id'];
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
if (isset($company['id'])) {//si l'entreprise existe
?>
<nav>
  <button id="lienFicheDonnees" type="button" name="button">Donnée Entreprise</button>
  <button id="lienFicheUpdate" type="button" name="button">Update Donnée entreprise</button>
</nav>
<!--  les contenu a traité en js  -->

<div id="ficheUpdate">
 <h2>Mise a jour de donnée de : <?php echo $company['nom']; ?></h2>
      <?php
       $update=[];
       $update = new Form($company);
       $_SESSION['form'] = 'update';
       ?>
 <form action="post.php" method="post">
   <?php
       echo $update->input('nom','Nom :');
       echo $update->input('tel','TEL :');
       echo $update->input('mail','@mail :');
       echo $update->input('site','Site :');
       echo $update->textarea('activite','Activitées :');
       echo $update->textarea('adresse','Adresse');
       echo $update->submit('Mettre à jour');
    ?>
 </form>
</div>
<div id="ficheDonnees">
 <h2>Fiche de l'entreprise : <?php echo htmlspecialchars($company['nom']); ?></h2>
 <p>
       <h3>Status actuel de l'entreprise :</h3>
           <form  action="post.php" method="post">
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
<?php
}else {
  header('location:index.php');
}
 ?>
