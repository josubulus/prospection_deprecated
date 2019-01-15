
//fonction d'affichage du contenu du Dom en fonction du click sur les lien sections
var section,lienSection;
function affichageDom(section,lienSection, conteneurDom){
  function contenuDom(){
    conteneurDom.innerHTML = section;
  };
  document.getElementById(lienSection).addEventListener('click',contenuDom);
}

    //varibale des différentes sections de la page :
    var mesObjectifs, ajoutEntreprise, fiche, classement, contenu, navDom;
      mesObjectifs = document.getElementById('mesObjectifs');
      fiche = document.getElementById('fiche');
          //section fiche :
          var ficheUpdate, ficheDonnees, ficheContenu;
            ficheContenu = document.getElementById('ficheContenu');
            ficheDonnees = document.getElementById('ficheDonnees');
            ficheUpdate = document.getElementById('ficheUpdate');
      classement = document.getElementById('classement');
      ajoutEntreprise = document.getElementById('ajoutEntreprise');
      contenu = document.getElementById('contenu');// : Le Dom.
      navDom = document.getElementById('navDom'); // : menu des liens Dom
    //sauvegarder et cacher le contenu des sections de la page :
    var sectionMesObjectifs, sectionClassement, sectionAjoutEntreprise;
      sectionAjoutEntreprise = ajoutEntreprise.innerHTML;
      ajoutEntreprise.innerHTML = "";

      sectionMesObjectifs = mesObjectifs.innerHTML;
      mesObjectifs.innerHTML = "";


      sectionClassement = classement.innerHTML;
      classement.innerHTML = "";

//------Organisation du Dom :

    //sections par défaut :
      contenu.innerHTML = sectionClassement;
            //fiche de l'entreprise protéger en php .

              if (fiche) {//gestion du contenu fiche
                /*var ficheAffich = fiche.innerHTML;
                fiche.innerHTML = "";*/
                contenu.innerHTML = "";

                    var divFicheUpdate, divFicheDonnees;
                    //gestion dom interne fiche
                      //stockage contenu des div :
                      divFicheUpdate = ficheUpdate.innerHTML;
                      ficheUpdate.innerHTML = "";

                      divFicheDonnees = ficheDonnees.innerHTML;
                      ficheDonnees.innerHTML = "";
                        //affichage en fonction des lien :
                          //contenu par défaut :
                              ficheContenu.innerHTML = divFicheDonnees;

                              affichageDom(divFicheUpdate, 'lienFicheUpdate', ficheContenu);
                              affichageDom(divFicheDonnees, 'lienFicheDonnees', ficheContenu);
console.log(ficheDonnees.innerHTML);



                //affichage complet de la fiche:
                /*contenu.innerHTML = ficheFunct();*/

              }//gestion du contenu fiche
    //changement du contenu :
if (navDom) {//vérifier que les liensDom existent.
  affichageDom(sectionAjoutEntreprise, 'lienAjoutEntreprise', contenu);
  affichageDom(sectionMesObjectifs, 'lienObjectifs', contenu);
  affichageDom(sectionClassement, 'lienClassement', contenu);
}//vérifier que les liensDom existent.
