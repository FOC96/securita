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
        <script type="text/javascript" src="../public/js/reporte.js"></script>
    </head>
    <body>
      <div class="backImage"></div>
       <div class="headerBar">
          <p onclick="showMapScreen()">Cancelar</p>
          <h3>Tipo de Reporte</h3>
          <p>        </p>
      </div>
       <div class="contenedor">
          
           
           <div id="grave" onclick="otroReporte(3)"><img src="../public/media/gun.svg">Grave</div>
           <div id="moderado" onclick="otroReporte(2)"><img src="../public/media/knife.svg">Moderado</div>
           <div id="leve" onclick="otroReporte(1)"><img src="../public/media/fist.svg">Leve</div>
           
       </div>
        
        
        <div class="backImage"></div>
    </body>
</html>