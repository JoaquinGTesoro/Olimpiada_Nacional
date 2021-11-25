<?php



function agregarProveedor($conexion, $nombre, $patente, $email, $telefono, $localidad, $empresa) {
    
    $sql = "INSERT INTO proveedores( nombre, patente, email, telefono, localidad, empresa) VALUES ('$nombre', '$patente', '$email', '$telefono', '$localidad', '$empresa')";
     header("location: ../paginas/principal.html?mensaje=registroexitoso");
    
   
  }
?>