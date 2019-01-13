/*var classement = document.getElementById('classement');
(confirm('test contenu')) ? contenu.innerHTML="" : null;
*/



var classement,classementCode;

classement = document.getElementById('classement');
classementCode = classement.innerHTML;
/*classement.innerHTML="";*/


var objectifs,objectifsCode;
objectifs = document.getElementById('mesObjectifs');
objectifsCode = objectifs.innerHTML;
objectifs.innerHTML = "";

var fiche = document.getElementById('fiche');
          if (fiche) {
            objectifs.innerHTML = "";
            classement.innerHTML = "";
          }


function classementF(){
  classement.innerHTML = classementCode;
  objectifs.innerHTML = "";
}
document.getElementById('lienClassement').addEventListener('click', classementF);



function objectifsF(){
  classement.innerHTML = "";
  objectifs.innerHTML = objectifsCode;
}
document.getElementById('lienObjectifs').addEventListener('click', objectifsF);
