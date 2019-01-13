/*var classement = document.getElementById('classement');
(confirm('test contenu')) ? contenu.innerHTML="" : null;
*/


// quand la page s'initialise :
var classement,classementCode;

classement = document.getElementById('classement');
classementCode = classement.innerHTML;



var objectifs,objectifsCode;
objectifs = document.getElementById('mesObjectifs');
objectifsCode = objectifs.innerHTML;
objectifs.innerHTML = "";

var fiche = document.getElementById('fiche');
          if (fiche) {
            objectifs.innerHTML = "";
            classement.innerHTML = "";
          }

//click sur classemnt :
function classementF(){
  classement.innerHTML = classementCode;
  objectifs.innerHTML = "";
}
document.getElementById('lienClassement').addEventListener('click', classementF);

//click sur objectif :

function objectifsF(){
  classement.innerHTML = "";
  objectifs.innerHTML = objectifsCode;
}
document.getElementById('lienObjectifs').addEventListener('click', objectifsF);
