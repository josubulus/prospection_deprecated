<?php
/**
 @Classe entreprise doit : écrire dans la bdd et gérer l'affichage
 */
class Entreprise{

  private $statut;
  private $id_user;
  private $companyData;


/**
@__construct prent des strings : $statut int et $id_user int
*/
  public function __construct($statut = null, $id_user = null){
     $this->statut = $statut;
     $this->id_user = $id_user;
    }



  /**
  @method : affiche les donnée de l'entreprise selon statut et le membre
  */
  public function companyList(){
    include('include/login_bdd.php');
    $req=$bdd->prepare('SELECT * FROM entreprises WHERE statut=:statut AND id_membre=:id_user');
    $req->execute(array('statut' => $this->statut,
                        'id_user' => $this->id_user));
    while ($companyData = $req->fetch()) {
      ?>
      <div class="firmList">
        <a href="index.php?idEntreprise=<?php echo $companyData['id'];?>&amp;idUser=<?php echo $companyData['id_membre']; ?>"><!--lien vers fiche entreprise-->
          <h3><?php echo htmlspecialchars($companyData['nom']); ?></h3>
          <p> <em>Activité de l'entreprise : </em> <?php echo htmlspecialchars($companyData['activite']); ?></p>
        </a>
      </div>
      <?php
    }

  }
/**
@method companyData Récupérer les donnée d'une entrepris en fonction d'un id_user et d'un id_entreprise
*/
  public function companyData($company_id,$id_user){
    include('include/login_bdd.php');
    $req=$bdd->prepare('SELECT id,nom,tel,mail,site,adresse,activite,DATE_FORMAT(date_ajout,"%d / %m / %Y") date_affich,statut,statut_mail,DATE_FORMAT(date_mail,"%d / %m / %Y") date_email,notes,interret,id_membre FROM entreprises WHERE id=:company_id AND id_membre=:id_user');
    $req->execute(array('company_id' => $company_id,
                        'id_user' => $id_user));
    $this->companyData = $req->fetch();
    $this->statut = $this->companyData['statut'];

  }

/**
@method affficher le nom des status en cours :
*/
  public function companyStatut(){
    switch ($this->statut) {
      case 1:
        return "A démarcher";
        break;
      case 2:
        return "Validé";
        break;
      case 3:
        return "Attente réponse";
        break;
      case 4:
        return "Refus";
        break;

      default:
        return "rajouter un statut de plus dans la methode";
        break;
    }
  }

/**
@getCompanyData récupérer les donnée d'une entreprise
*/
 public function getCompanyData(){
   return $this->companyData;
 }
/**
@mathod uodate statut :
*/
  public function companyUpdateStatut($statut){
    include('include/login_bdd.php');
    $req = $bdd->prepare('UPDATE entreprises SET statut=:statut WHERE id=:id_entreprise ');
    $req->execute(array('statut' => $statut['statut'],
      'id_entreprise' => $statut['id_entreprise']));
  }

/**
@method ecrire dans la bdd paramètre 1 array string, 2 array int ne pas passer de paramètre dans le constructeur pour utiliser la méthode
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
/**
@method update entreprises
*/
  public function update($update){
    include('include/login_bdd.php');
    $req = $bdd->prepare('UPDATE entreprises SET nom=:nom,tel=:tel,mail=:mail,site=:site,adresse=:adresse,activite=:activite WHERE id=:id_entreprise');
    $req->execute(array('nom'=>$update['nom'],
                              'tel' =>$update['tel'],
                              'mail'=>$update['mail'],
                              'site'=>$update['site'],
                              'activite'=>$update['activite'],
                              'adresse'=>$update['adresse'],
                               'id_entreprise'=>$update['id_entreprise']));
  }


}//fin de la class

 ?>
