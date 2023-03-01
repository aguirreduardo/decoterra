
/********** VERSIÓN USANDO DATA-BS- COMO EN EL EJEMPLO DE BOOTSTRAP*******/

/*
let exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  let button = event.relatedTarget
  // Extract info from data-bs-* attributes
  let cardFoto = button.getAttribute('data-bs-foto');
  let cardTitulo = button.getAttribute('data-bs-titulo');
  let cardPrecio = button.getAttribute('data-bs-precio');

  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  let modalFoto = exampleModal.querySelector('#img-modal');
  let modalTitulo = exampleModal.querySelector('#title-modal');
  let modalPrecio = exampleModal.querySelector('#precio-modal');

  modalFoto.src = cardFoto;
  modalTitulo.textContent = cardTitulo;
  modalPrecio.textContent = cardPrecio;
})
*/

/********** VERSIÓN USANDO CLASES, APROVECHANDO QUE YA ESTÁS POSICIONADO AL HACER CLICK*******/

let exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  let button = event.relatedTarget

  let card = button.closest('.card');

  //agarrar la info de origen
  let cardFoto = card.querySelector('.cardFoto');
  let cardTitulo = card.querySelector('.cardTitle');
  let cardPrecio = card.querySelector('.cardPrecio');

  // seleccionar los destinos
  let modalFoto = exampleModal.querySelector('#img-modal');
  let modalTitulo = exampleModal.querySelector('#title-modal');
  let modalPrecio = exampleModal.querySelector('#precio-modal');

  // meter la info
  modalFoto.src = cardFoto.src;
  modalTitulo.innerHTML = cardTitulo.innerHTML;
  modalPrecio.innerHTML = cardPrecio.innerHTML;
})




const imgchange = document.getElementById("img-modal");
const titlechange = document.getElementById("title-modal");

changeCam001 = function(){
    imgchange.src = "./imagen/cam001.jpeg";
    //titlechange.innerHTML = "Cubre Cama";
	//titlechange.textContent = "Cubre Cama";

	console.log(titlechange);

}

changeCam002 = function(){
    imgchange.src = "./imagen/cam002.jpeg";
}

changeCam003 = function(){
    imgchange.src = "./imagen/cam003.jpeg";
}

changeCam004 = function(){
    imgchange.src = "./imagen/cam004.jpeg";
}

changeCam005 = function(){
    imgchange.src = "./imagen/cam005.jpeg";
}

changeCam001 = function(){
    imgchange.src = "./imagen/cam001.jpeg";
}

changeCam002 = function(){
    imgchange.src = "./imagen/cam002.jpeg";
}

changeFund001 = function(){
    imgchange.src = "./imagen/fun001.jpeg";
}

changeFund002 = function(){
    imgchange.src = "./imagen/fun002.jpeg";
}
