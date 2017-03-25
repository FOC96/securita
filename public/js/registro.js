function registrar(){
	var gateway = 'http://localhost/securita/';
	var nombre = document.querySelector('#userSignUp');
	var correo = document.querySelector('#emailSignUp');
	var telefono =  document.querySelector('#phoneSignUp');
	var pass = document.querySelector('#passwordSignUp');

	var datos = "nombre="+nombre.value+"&correo="+correo.value+"&telefono="+telefono.value+"&pass="+pass.value;
	var url = gateway+'model/registro.php';
	if(nombre != '' && correo != '' && telefono != '' && pass != ''){
		registro = new XMLHttpRequest();
		registro.open("POST", url ,true);
		registro.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		registro.send(datos);
		registro.onreadystatechange = function (){
			if (registro.readyState == 4) {
				if(registro.responseText == '1'){
					sweetAlert("Bien","Bienvenido","success");
					signUptoIn();
				} if(registro.responseText == '2'){
					sweetAlert("Error","Intenta mas tarde","error");
				}
			} 
		}
	} else {
		sweetAlert("Error","Los Campos son obligatorios","error");
		nombre.focus();
	}
}