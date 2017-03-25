window.addEventListener('load',function() {
	getCatalogo();
},false);

function getCatalogo(){
	var gateway = 'http://localhost/securita/';
	var telefonos = document.getElementById('telefonos');
	var url = gateway+'model/catalogoEmergencias.php';
	catalogo = new XMLHttpRequest();
	catalogo.open("POST", url ,true);
	catalogo.send();
	catalogo.onreadystatechange = function (){
		if (catalogo.readyState == 4) {
			telefonos.innerHTML = catalogo.responseText;
			// console.log(catalogo.responseText);
		} 
	}
}