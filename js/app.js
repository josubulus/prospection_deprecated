
//fonction d'affichage du contenu du Dom en fonction du click sur les lien sections
var section,lienSection;
function affichageDom(section,lienSection){
  function contenuDom(){
    contenu.innerHTML=section;
  };
  document.getElementById(lienSection).addEventListener('click',contenuDom);
}

    //varibale des différentes sections de la page :
    var mesObjectifs, ajoutEntreprise, fiche, classement, contenu,navDom;
      mesObjectifs = document.getElementById('mesObjectifs');
      fiche = document.getElementById('fiche');
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
            //fiche de l'entreprise protéger en php du coup section par défaut avec condition.
            var sectionFiche;
              if (fiche) {
                sectionFiche = fiche.innerHTML;
                fiche.innerHTML = "";
                contenu.innerHTML = sectionFiche;
              }
    //changement du contenu :
if (navDom) {//vérifier que les liensDom existent.
  affichageDom(sectionAjoutEntreprise, 'lienAjoutEntreprise');
  affichageDom(sectionMesObjectifs, 'lienObjectifs');
  affichageDom(sectionClassement, 'lienClassement');
}//vérifier que les liensDom existent.
console.log(ajoutEntreprise);
