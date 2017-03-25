<html>
    <head>
        <title>Securitas</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        <link href="public/css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="public/js/magic.js"></script>
    </head>
    <body>
        
        <div class="centerDiv" id="signIn">
            <img src="public/media/logo.png" id="logo">
            
            <input type="text" id="userLogIn">
            <input type="password" id="passwordLogIn">
            
            <button id="btnLogIn" class="mainButton">Iniciar Sesión</button>
            
            <div>
                <button class="btnSecond" onclick="showRegistro()">Crear Usuario</button>
                <button class="btnSecond">Recuperar Contraseña</button>
            </div>
            
        </div>
        
        <div class="downDiv" id="signUp">
            
            <input type="text" id="userSignUp">
            <input type="email" id="emailSignUp">
            <input type="number" id="phoneSignUp">
            <input type="password" id="passwordSignUp">
            
            <button class="mainButton">Crear Usuario</button>
            <button class="btnOne">Ya tengo cuenta</button>
            
        </div>
        
        
        
        
        
        
        
        <div class="backImage"></div>
    </body>
</html>