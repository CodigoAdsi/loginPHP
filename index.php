<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en PHP</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <!-- Probando css de bootstrap-->
  <h1>Bienvenido </h1>

  <!-- Probando iconos Font Awesome -->
  <i class="fa fa-user"></i> My name is

  <!--
    Y como no solo es css :v ahi viene el javascript,
    Antes que nada recordar que tanto Bootstrap como
    Sweet alert necesitan Jquery para funcionar
    correctamente, ademas programaremos tambien en jquery
    asi que sobran los motivos para importarlo de primero xd
  -->
    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Verificamos jquery y SweetAlert -->
    <script type="text/javascript">
      $(document).ready(function(){
        swal('Bienvenido programador', 'Gracias por confiar en mi, tranquil@ hoy aprenderas a realizar un login como se debe :) ', 'success');
      });
    </script>
  </body>
</html>
