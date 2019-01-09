<?php
session_start();

/*             Ajouter une entreprise         */
if ($_SESSION['form'] == 'newFirm') {
  require 'class/Entreprise.php';
  $write= new Entreprise();
  if (isset($_POST)) {
    $dataNewFirm = array_merge($_POST, $_SESSION);
    $write->write($dataNewFirm);
  }
}



/*       LOGIN          */
if ($_SESSION['page'] != 'login_ok') {
  require 'class/Membre.php';
  $login = new Membre();
  $login->login($_POST);
  $_SESSION = $login->userData;
}





header('location:index.php');
 ?>
