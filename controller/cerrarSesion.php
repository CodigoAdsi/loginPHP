<?php

  // Eliminamos la sesion
  session_start();
  session_destroy();

  header('location: ../index.php');

?>
