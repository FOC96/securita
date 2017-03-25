window.addEventListener('load',function() {
	getEstdis();
},false);

function getEstdis(){
	var gateway = 'http://localhost/securita/';
	var estadisticas = document.getElementById('estadisticas');
	var url = gateway+'model/getEstadistica.php';
	est = new XMLHttpRequest();
	est.open("POST", url ,true);
	est.send();
	est.onreadystatechange = function (){
		if (est.readyState == 4) {
			estadisticas.innerHTML = est.responseText;
		} 
	}
}