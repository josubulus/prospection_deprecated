<?php require 'class/Formulaire.php';
      $log = new Form($_POST);?>
<form action="post.php" method="post">
      <?php
      echo $log->input('login_pseudo','pseudo');
      echo $log->pass('login_pass','mdp');
      echo $log->submit('login');
      ?>
</form>
