<!DOCTYPE html>
<html lang="es">
     <head>
          <meta charset="UTF-8">
          <title>Push - Notificaciones JavaScript para equipos de escritorio</title>
     </head>
<body>

     <h1>Push</h1>
     <p>Notificaciones JavaScript para equipos de escritorio.</p>
     <!--Recuerda modificar la ruta de la librería Push-->
     <script src="push/bin/push.min.js"></script>
     <script>
          //Todo el código que se encuentra aquí se auto explica 
          Push.create("Notificación Js", { //Titulo de la notificación
               body: "Desarrollador front-end.", //Texto del cuerpo de la notificación
               icon: 'https://sitio.com/content/images/2017/04/autor.png', //Icono de la notificación
               timeout: 6000, //Tiempo de duración de la notificación
               onClick: function () {//Función que se cumple al realizar clic cobre la notificación
                    window.location = "https://sitio.com"; //Redirige a la siguiente web
                    this.close(); //Cierra la notificación
               }
          });
     </script>
</body>

</html>