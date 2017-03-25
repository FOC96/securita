<html>
    <head>
        <title>Securitas</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        <link href="../public/css/style.css" rel="stylesheet" type="text/css">
        <link href="../public/css/sweetalert.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../public/js/magic.js"></script>
        <script type="text/javascript" src="../public/js/sweetalert.min.js"></script>
        <script type="text/javascript" src="../public/js/ajaxCatalogoEmergencias.js"></script>
    </head>
    <body class="gray">
       <div class="headerBar">
          <p onclick="showMapScreen()"><img src="../public/media/cancel.svg"></p>
          <h3>Emergencia</h3>
          <p>        </p>
      </div>
      
       <div class="contenedor" id="emergencyCall">
          
           <div>
               <select class="selSOS" id="telefonos"></select>
               <button class="phoneBtn" onclick="llamar()"><img src="../public/media/phone.svg"></button>
           </div>
           
           <button class="mainButtonYes">¿Qué hago ahora?</button>
           
       </div>
       <script type="text/javascript">
         
         function llamar() {
            var options = telefonos.options;
            var id      = options[options.selectedIndex].id;
            console.log(id);
           location.href="tel:"+id;
         }
       </script>
    </body>
</html>