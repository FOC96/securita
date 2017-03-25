window.addEventListener('load',function() {
	getHisto();
},false);

function getHisto(){
	var gateway = 'http://localhost/securita/';
	var histo = document.getElementById('historial');
	var url = gateway+'model/historial.php';
	hti = new XMLHttpRequest();
	hti.open("POST", url ,true);
	hti.send();
	hti.onreadystatechange = function (){
		if (hti.readyState == 4) {
			histo.innerHTML = hti.responseText;
		} 
	}
}