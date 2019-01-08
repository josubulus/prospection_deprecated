<!DOCTYPE html>
<html lang="fr" dir="ltr" />
  <head>
    <meta charset="utf-8">
    <title>Ajout Entreprise</title>

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
      require 'class/Entreprise.php';
      $ajout = new Form();
       ?>
      <form action="" method="post">
          <?php
          echo $ajout->input('nom','Nom :');
          echo $ajout->input('tel','TEL :');
          echo $ajout->input('mail','@mail :');
          echo $ajout->input('site','Site :');
          echo $ajout->input('id_membre', 'id user');
          echo $ajout->input('activite','Activitées :');
          echo $ajout->textarea('adresse','Adresse');
          echo $ajout->submit('creer');
        if (isset($_POST)) {
          $write= new Entreprise();
            $write->write($_POST);
        }

           ?>
      </form>
    </section>
  </body>
</html>
