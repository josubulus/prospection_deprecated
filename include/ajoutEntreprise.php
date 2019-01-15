<div>
  <?php
  $ajout = new Form();
  $_SESSION['form'] = 'newFirm';
   ?>
  <form action="post.php" method="post">
      <?php
      echo $ajout->input('nom','Nom :');
      echo $ajout->input('tel','TEL :');
      echo $ajout->input('mail','@mail :');
      echo $ajout->input('site','Site :');
      echo $ajout->textarea('activite','Activitées :');
      echo $ajout->textarea('adresse','Adresse');
      echo $ajout->submit('creer');
       ?>
  </form>

</div>
