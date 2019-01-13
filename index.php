<?php session_start();
 $_SESSION['init'] ='init';
  require 'class/Entreprise.php';//appel class pour tout les include pour l'utilisation dans tout les includes
?>
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
      <h1>Prospection</h1>
    </header>
        <h3><?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }

         ?></h3>
<?php
if ( !isset($_SESSION['page']) || $_SESSION['page'] !== 'login_ok') { // si non logé
?>
          <section>
              <h2>Login</h2>
                    <?php include('include/login.php'); ?>
          </section>
<?php
}//si non logé
else {//sinon :
?>
        <section id="mesObjectifs">
          <?php include('include/objectifs.php'); ?>
        </section>
                          <?php
                          if (isset($_GET['idEntreprise']) && isset($_GET['idUser'])) {//condition pour afficher la fiche entreprise
                          ?>
                                  <section id="fiche">
                                    <p><a href="index.php">Retoure</a></p>
                                    <?php
                                    include('include/fiche.php');
                                     ?>
                                  </section>

                          <?php
                        }else {
                          ?>
                          <p><a id="lienClassement" href="#"> classement : </a></p>
                          <p><a id="lienObjectifs"  href="#">Objectifs</a></p>
                          <?php
                        }
                           ?>

        <section id="classement">
         <?php include('include/classement.php'); ?>
        </section>


<?php
}
 ?>

    <script src="js/app.js"></script>
  </body>
</html>
