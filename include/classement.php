<!--1 2 3 4 = a demarcher, reponse imminente , attente réponse , refus-->
<div class="boxName">
  <h2>a demarcher</h2>
      <?php
        $aDemarcher = new Entreprise(1,$_SESSION['id_membre']);
        $aDemarcher->companyList();
        ?>
</div>
<div class="boxName">
  <h2>attente réponse</h2>
  <?php
  $attenteReponse = new Entreprise(3,$_SESSION['id_membre']);
  $attenteReponse->companyList();
   ?>
</div>
<div class="boxName">
  <h2>refus</h2>
      <?php
        $refus = new Entreprise(4,$_SESSION['id_membre']);
        $refus->companyList();
       ?>
</div>
