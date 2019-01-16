<?php session_start();
 $_SESSION['init'] ='init';
 //appel class pour tout les include pour l'utilisation dans tout les includes
  require 'class/Entreprise.php';
  require 'class/Formulaire.php';
  require 'class/Membre.php';
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

      <h4>Dev suppression entreprise</h4>
      <h4>rajout note dans update entreprise</h4>
      <h4>édition des objectifs</h4>
      <h4>Développer un systeme de couleurs pour les entreprises par importance</h4>
      <h4>dev : création et suppression de compte profil admin</h4>
      <h4>mise en place du dom def et du css</h4>
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
  // Toutes les sections caché en javascript sauf fiche car protégé en php.
?>
        <section id="mesObjectifs">
          <?php include('include/objectifs.php'); ?>
        </section>

        <section id="ajoutEntreprise">
          <?php include('include/ajoutEntreprise.php'); ?>
        </section>
                          <?php
                          if (isset($_GET['idEntreprise']) && isset($_GET['idUser']) && !empty($_GET['idEntreprise']) && !empty($_GET['idUser'])) {//condition pour afficher la fiche entreprise
                          ?>
                                  <section id="fiche">
                                    <p><a href="index.php">Classement</a></p>
                                    <?php
                                    include('include/fiche.php');
                                     ?>
                                  </section>

                          <?php
                        }else {// affiche le menu dom que si la fiche n'est pas présente
                          ?>
                          <?php include ('include/domNav.php'); ?>
                          <?php
                        }// affiche le menu dom que si la fiche n'est pas présente
                           ?>

        <section id="classement" >
            <div class="boxClassement">
              <?php include('include/classement.php'); ?>
            </div>
        </section>
<!--      Le contenu du Dom s'affiche dans la div si-dessous   -->
        <div id="contenu" >

        </div>
<?php
}
 ?>

    <script src="js/app.js"></script>
  </body>
</html>
