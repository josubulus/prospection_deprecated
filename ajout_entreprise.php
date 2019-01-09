<?php session_start();
if (isset($_SESSION) && $_SESSION['page'] == "login_ok") {
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr" />
  <head>
    <meta charset="utf-8">
    <title>Ajout Entreprise</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <nav>
        <?php include('include/nav.php'); ?>
      </nav>
    </header>
    <section>
      <?php
      require 'class/Formulaire.php';
      $ajout = new Form();
      $_SESSION['form'] = 'newFirm';
       ?>
      <form action="post.php" method="post">
          <?php
          echo $ajout->input('nom','Nom :');
          echo $ajout->input('tel','TEL :');
          echo $ajout->input('mail','@mail :');
          echo $ajout->input('site','Site :');
          echo $ajout->input('activite','Activitées :');
          echo $ajout->textarea('adresse','Adresse');
          echo $ajout->submit('creer');
           ?>
      </form>
    </section>
  </body>
</html>

<?php
}//protection login
else {
  header('location:index.php');
}

?>
