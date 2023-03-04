// JavaScript Document
function confirmacion(e) {
	if (confirm("¿Esta seguro que lo desea eliminar?")) {
		return true;
	} else {
		e.preventDefault();
	}
}

var linkDelete = document.querySelectorAll(".table--item--link");

for(var i = 0; i < linkDelete.length; i++) {
	linkDelete[i].addEventListener('click', confirmacion);
}
	