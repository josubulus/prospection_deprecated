<!DOCTYPE html>
<html lang="fr" dir="ltr" />
  <head>
    <meta charset="utf-8">
    <title>Ajout Entreprise</title>
  </head>
  <body>
    <section>
      <?php
      require 'class/Formulaire.php';
      require 'class/Entreprise.php';
      $ajout = new Form($_POST);
       ?>
      <form action="" method="post">
          <?php
          echo $ajout->input('nom','Nom :');
          echo $ajout->input('tel','TEL :');
          echo $ajout->input('mail','@mail :');
          echo $ajout->input('site','Site :');
          echo $ajout->input('activite','Activitées :');
          echo $ajout->textarea('adresse','Adresse');
          echo $ajout->submit('creer');
          $user=array('id' => 6 );
        if (isset($_POST,$user)) {
          $write= new Entreprise($_POST);
            $write->write($_POST,$user);
        }

          /**/
           ?>
      </form>
    </section>
  </body>
</html>
