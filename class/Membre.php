<?php
/**
 *@class : connection , création est controles des memebres
 */
class Membre
{
  public $error;
  public $userData;



/**
*@method login paramètres formulaire post
*/
    public function login($userLogin){
                  include('include/login_bdd.php');
                  $req=$bdd->prepare('SELECT * FROM membres WHERE pseudo=:pseudo');
                  $req->execute(array('pseudo'=>$userLogin['login_pseudo']));
                  $login=$req->fetch();


              if ($login['pseudo'] == $userLogin['login_pseudo']){//tchek pseudo //

                      if (password_verify($userLogin['login_pass'],$login['pass'])) {//tchek mdp
                        $this->userData['page']="login_ok";
                        $this->userData['id_membre']=$login['id'];
                        $this->userData['pseudo_membre']=$login['pseudo'];

                      }//tchek mdp
                      else {
                         $this->error['post_retour'] = "mdp erroné";
                      }

              }//tchek pseudo
              else {
                $this->error['post_retour'] = "pseudo erroné";
              }
    }


}//fermeture class

 ?>
