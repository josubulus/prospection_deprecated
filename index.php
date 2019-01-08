<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<link rel="stylesheet" href="css/style.css" />
  <head>
    <meta charset="utf-8">
    <title>Prospection</title>
  </head>
  <body>
    <div id="contenu">
      <header>
        <nav>
          <?php include('include/nav.php'); ?>
        </nav>
        <h1>Ici affichage des box de classement d'entreprises</h1>
      </header>
      <?php require 'class/Entreprise.php'; ?>
      <section class="classement"><!--1 2 3 4 = a demarcher, reponse imminente , attente réponse , refus-->
        <div class="boxName">
          <h2>a demarcher</h2>
              <?php
                $aDemarcher = new Entreprise(1,6);
                $aDemarcher->firmList();
                ?>
        </div>
        <div class="boxName">
          <h2>attente réponse</h2>
          <?php
          $attenteReponse = new Entreprise(3,6);
          $attenteReponse->firmList();
           ?>
        </div>
        <div class="boxName">
          <h2>refus</h2>
              <?php
                $refus = new Entreprise(4,6);
                $refus->firmList();
               ?>
        </div>
      </section>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
