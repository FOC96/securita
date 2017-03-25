function registrar() {
	var resultado = document.querySelector('#resultadoBusqueda');
	var mensaje = document.querySelector('#mensaje');
	var busqueda =  document.querySelector('#barraBusqueda');
	var datos = 'busqueda='+busqueda.value;
	var url = config.url+'Nutricion/busqueda';

	if(busqueda.value != '' && busqueda.value != null && busqueda.value != ' '){
		search = new XMLHttpRequest();
		search.open("POST", url ,true);
		search.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		search.send(datos);
		search.onreadystatechange = function (){
			if (search.readyState == 4) {
				mensaje.innerHTML = 'Da clic sobre la ficha del alumno a evaluar:';
				resultado.innerHTML = search.responseText;
			} 
		}
	} else {
		mensaje.innerHTML = 'Introduce Expediente o Nombres para realizar la busqueda';
		resultado.innerHTML = '';
	}
}