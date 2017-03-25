function reporte(){
	var gateway = 'http://localhost/securita/';

	var idAlerta = document.querySelector('#idAlerta');
	var descripcion = document.querySelector('#descripcion');

	var url = gateway+'model/reporte.php';
	var data = 'idAlerta='+idAlerta+'&descripcion='+descripcion;

	repor = new XMLHttpRequest();
	repor.open("POST", url ,true);
	repor.send();
	repor.onreadystatechange = function (){
		if (repor.readyState == 4) {
			console.log(repor.responseText);
		} 
	}
}

function otroReporte(tipo) {
	var gateway = 'http://localhost/securita/';

	var url = gateway+'model/alerta.php';
	var data = 'latitud=20.7044'+'&longitud=-100.4435'+'&tipo='+tipo+'&zona=1';
	otherRepo = new XMLHttpRequest();
	otherRepo.open("POST", url ,true);
	otherRepo.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	otherRepo.send(data);
	otherRepo.onreadystatechange = function (){
		if (otherRepo.readyState == 4 && otherRepo.status == 200) {
			if(otherRepo.responseText){
				location.href = gateway+'views/otroReporte.php';
			} else {
				sweetAlert('Error','Fallo, intenta mas tarde','error');
			}
		} 
	}
}