<?php

  include_once 'conexion.php';


  $proveedor = $_POST['proveedor'];
  $litrosleche = $_POST['litros-leche'];
  $ph = $_POST['pH'];
  $temperatura = $_POST['temperatura'];
  $densidad = $_POST['densidad'];
  $alcohol = $_POST['alcohol'];
  $sensorial = $_POST['sensorial'];
  $responsable = $_POST['responsable'];
  $observacion = $_POST['observaciones'];
  
 // $fecha = date('d-m-Y H:i:s');
 // var_dump($fecha);die;

  $sql = "INSERT INTO recepcionleche(id_proveedor, litros, pH, temperatura, densidad, alcohol, sensorial, responsable, observacion) VALUES ('$proveedor', '$litrosleche', '$ph', '$temperatura', '$densidad', '$alcohol', '$sensorial', '$responsable', '$observacion')";
  $resultado= mysqli_query($conexion,$sql);
     header("location: ../paginas/principal.html?mensaje=registroexitoso");

?>