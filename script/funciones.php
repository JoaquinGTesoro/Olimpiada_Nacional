<?php
  function agregarProveedor($conexion, $nombre, $patente, $email, $telefono, $localidad, $empresa) {
      $sql = "INSERT INTO proveedores( nombre, patente, email, telefono, localidad, empresa) VALUES ('$nombre', '$patente', '$email', '$telefono', '$localidad', '$empresa')";
      header("location: ../paginas/principal.html?mensaje=registroexitoso");
  }

  function mostrarEntradas($conexion, $anio, $mes, $dia) {
    $sql = mysqli_query($conexion, "SELECT * FROM recepcionleche WHERE fecha LIKE '".$anio."-".$mes."-".$dia."%'; ");
    
    if (mysqli_num_rows($sql) == 0) {
        echo "<tr><td colspam = 5>No hay datos</td></tr>";
    } else {
        while ($fila = mysqli_fetch_assoc($sql)) {
          echo "<tr>
                  <td>".$fila['id_leche']."</td>
                  <td>".$fila['lote']."</td>
                  <td>".$fila['id_proveedor']."</td>
                  <td>".$fila['litros']."</td>
                  <td>".$fila['pH']."</td>
                  <td>".$fila['temperatura']."</td>
                  <td>".$fila['densidad']."</td>
                  <td>".$fila['alcohol']."</td>
                  <td>".$fila['sensorial']."</td>
                  <td>".$fila['responsable']."</td>
                  <td>".$fila['observacion']."</td>
                </tr>";
        }
    }
  }
?>