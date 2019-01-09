<?php
/**
 * Classe entreprise doit : écrire dans la bdd et gérer l'affichage
 */
class Entreprise{

  private $statut;
  private $id_user;



/**
*@__construct prent des strings : $statut int et $id_user int
*/
  public function __construct($statut = null, $id_user = null){
     $this->statut = $statut;
     $this->id_user = $id_user;
    }



  /**
  *@method : affiche les donnée de l'entreprise selon statut et le membre
  */
  public function firmList(){
    include('include/login_bdd.php');
    $req=$bdd->prepare('SELECT * FROM entreprises WHERE statut=:statut AND id_membre=:id_user');
    $req->execute(array('statut' => $this->statut,
                        'id_user' => $this->id_user));
    while ($firmData = $req->fetch()) {
      ?>
      <div class="firmList">
        <a href="#"><!--lien vers fiche entreprise-->
          <h3><?php echo htmlspecialchars($firmData['nom']); ?></h3>
          <p> <em>Activité de l'entreprise : </em> <?php echo htmlspecialchars($firmData['activite']); ?></p>
        </a>
      </div>
      <?php
    }

  }



/**
* ecrire dans la bdd paramètre 1 array string, 2 array int ne pas passer de paramètre dans le constructeur pour utiliser la méthode
*/
  public function write($new_entreprise){

    include('include/login_bdd.php');
    $req=$bdd->prepare('INSERT INTO entreprises(nom,tel,mail,site,adresse,activite,date_ajout,statut,statut_mail,interret,id_membre) VALUES (:nom,:tel,:mail,:site,:adresse,:activite,now(),1,1,1,:id_membre)');
    $req->execute(array('nom'=>$new_entreprise['nom'],
                              'tel' =>$new_entreprise['tel'],
                              'mail'=>$new_entreprise['mail'],
                              'site'=>$new_entreprise['site'],
                              'activite'=>$new_entreprise['activite'],
                              'adresse'=>$new_entreprise['adresse'],
                               'id_membre'=>$new_entreprise['id_membre']));
  }



}//fin de la class

 ?>
