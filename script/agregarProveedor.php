<?php

  include_once 'conexion.php';


  $nombre = $_POST['nombre'];
  $patente = $_POST['patente'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $localidad = $_POST['localidad'];
  $empresa = $_POST['empresa'];

  $sql = "INSERT INTO proveedores(nombre, patente, email, telefono, localidad, empresa) VALUES ('$nombre', '$patente', '$email', '$telefono', '$localidad', '$empresa')";
  $resultado= mysqli_query($conexion,$sql);
     header("location: ../paginas/principal.html?mensaje=registroexitoso");

?>