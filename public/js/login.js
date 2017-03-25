function login(){
  var user = document.getElementById("userLogIn").value;
  var pass = document.getElementById("passwordLogIn").value;
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
          Location.href("view/map.php");
        }
        else{
          alert("Usuario o Contraseña no validos");
        }
      }
    }
  }
  else{
    alert("No es un correo o numero valido");
  }
}
