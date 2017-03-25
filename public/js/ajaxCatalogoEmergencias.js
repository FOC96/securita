function getCatalogo(){
	var gateway = 'http://localhost/securita/';

	var url = gateway+'model/catalogoEmergencias.php';
	catalogo = new XMLHttpRequest();
	catalogo.open("POST", url ,true);
	catalogo.send();
	catalogo.onreadystatechange = function (){
		if (catalogo.readyState == 4) {
			console.log(catalogo.responseText);
		} 
	}
}