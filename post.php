<?php
session_start();
require 'class/Entreprise.php';
/*             Ajouter une entreprise         */
if (isset($_SESSION['form'])  && $_SESSION['form'] == 'newFirm') {

  $write= new Entreprise();
  if (isset($_POST)) {
    $dataNewFirm = array_merge($_POST, $_SESSION);
    $write->write($dataNewFirm);
  }
}



/*       LOGIN          */ //developper le retour d'erreur
if (!isset($_SESSION['page']) || $_SESSION['page'] != 'login_ok') {
  require 'class/Membre.php';
  $login = new Membre();
  $login->login($_POST);
  $_SESSION = $login->getUserData();
  if ($login->error() ==! null) {
    $_SESSION['error'] = $login->error();
  }

}

/*        UPDATE entreprise      */
if (isset($_SESSION['form']) && $_SESSION['form'] == 'update' && isset($_POST['nom'])) {

  $update = new Entreprise();
  $dataUpdate = array_merge($_POST, $_SESSION);
  $update->update($dataUpdate);

}

/*         STATUT UPDATE              */
if ($_SESSION['form'] == 'update' && isset($_POST['statut'])) {

  $updateStatut = new Entreprise();
  $dataUpdateStatut = array_merge($_POST, $_SESSION);
  $updateStatut->companyUpdateStatut($dataUpdateStatut);
}


if (isset($_SESSION['form']) && $_SESSION['form'] == 'update' && !isset($_POST['statut'])) {
  header('location:index.php?idEntreprise=' . $dataUpdate['id_entreprise'] . '&idUser=' . $dataUpdate['id_membre'] . '');
}elseif (isset($_POST['statut'])) {
  header('location:index.php?idEntreprise=' . $dataUpdateStatut['id_entreprise'] . '&idUser=' . $dataUpdateStatut['id_membre'] . '');
}
else {
  header('location:index.php');
}


 ?>
