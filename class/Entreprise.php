<?php
/**
 * Classe entreprise doit : écrire dans la bdd et gérer l'affichage
 */
class Entreprise{

  private $donnees_entreprise;

/**
*@__construct prent des strins : nom,tel,mail,site,adresse,activitée
*/
  public function __construct($donnees_entreprises = array())
  {
    $this->$donnees_entreprise=$donnees_entreprise;
  }
/**
* ecrire dans la bdd paramètre 1 array string, 2 array int
*/
  public function write($new_entreprise,$user){
    include('include/login_bdd.php')
    $req=$bdd->prepare('INSERT INTO entreprises(nom,tel,mail,site,adresse,activite,date_ajout,statut,statut_mail,interret,id_membre) VALUES (:nom,:tel,:mail,:site,:adresse,:activite,now(),1,1,1,:id_membre)');
    $req->execute(array('nom'=>$new_entreprise['nom'],
                              'tel' =>$new_entreprise['tel'],
                              'mail'=>$new_entreprise['mail'],
                              'site'=>$new_entreprise['site'],
                              'activite'=>$new_entreprise['activite'],
                              'adresse'=>$new_entreprise['adresse'],
                               'id_membre'=>$user['id_membre']));
  }



}

 ?>
