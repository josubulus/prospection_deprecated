<?php
try
  {
    $bdd = new PDO('mysql:host=51.77.202.15;dbname=phpmyadmin;charset=utf8','phpmyadmin','UNrdX5A7KNVSADdjcky',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
 ?>
