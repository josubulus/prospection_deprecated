var image = document.getElementById('image');

image.className = prompt('ENtrer class : ');
console.log(image.classList);
for (var i = 0; i < image.classList.length; i++) {
  document.write(image.classList[i]);
}

/*var translateBathroom = confirm('Abracadabra !');
(translateBathroom) ? image.src = 'img/wc.jpeg' : null;*/
