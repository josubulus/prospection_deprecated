<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<link rel="stylesheet" href="css/style.css" />
  <head>
    <meta charset="utf-8">
    <title>Prospection</title>
  </head>
  <body>
    <header>
      <nav>
        <?php include('include/nav.php'); ?>
      </nav>
      <h1>Ici affichage des box de classement d'entreprises</h1>
    </header>
<?php
if (isset($_SESSION) && $_SESSION['page'] != "login_ok") { // si non logé
?>

<section>
    <h2>Login</h2>
          <?php require 'class/Formulaire.php';
                $log = new Form($_POST);?>
      <form action="post.php" method="post">
                <?php
                echo $log->input('login_pseudo','pseudo');
                echo $log->pass('login_pass','mdp');
                echo $log->submit('login');
                ?>
        </form>
        <h2>retour info </h2>
            <?php
              foreach ($_SESSION as $key => $value) {
                echo $key . '/' . $value . '<br />';
              }
             ?>

</section>
<?php
}
else {
?>
<section class="classement"><!--1 2 3 4 = a demarcher, reponse imminente , attente réponse , refus-->
  <?php require 'class/Entreprise.php'; ?>
  <div class="boxName">
    <h2>a demarcher</h2>
        <?php
          $aDemarcher = new Entreprise(1,$_SESSION['id_membre']);
          $aDemarcher->firmList();
          ?>
  </div>
  <div class="boxName">
    <h2>attente réponse</h2>
    <?php
    $attenteReponse = new Entreprise(3,$_SESSION['id_membre']);
    $attenteReponse->firmList();
     ?>
  </div>
  <div class="boxName">
    <h2>refus</h2>
        <?php
          $refus = new Entreprise(4,$_SESSION['id_membre']);
          $refus->firmList();
         ?>
  </div>
</section>
<?php
}
 ?>




    <script src="js/app.js"></script>
  </body>
</html>
