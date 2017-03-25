function login(){
  var user = document.getElementById("userLogIn").value;
  var pass = document.getElementById("passwordLogIn").value;
  var gateway = 'http://localhost/securita/';
  user = user.replace(' ','');
  if(!isNaN(user)||user.indexOf("@")!=-1){
    enviar = new XMLHttpRequest();
    var params = 'user='+user+'&pass='+pass;
  	enviar.open('POST','model/login.php', true);
    enviar.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  	enviar.send(params);
  	enviar.onreadystatechange = function(){
  		if(enviar.readyState == 4 && enviar.status == 200){
        if(enviar.responseText=="ok"){
          location.href = gateway+'views/map.php';
        }
        else{
          sweetAlert("Error","Usuario o Contraseña no validos","error");
        }
      }
    }
  }
  else{
    sweetAlert("Error","No es un correo o numero valido","error");
  }
}
