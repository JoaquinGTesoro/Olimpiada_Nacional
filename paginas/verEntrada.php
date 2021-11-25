<?php
    include_once('../script/conexion.php');
    include_once('../script/funciones.php');

    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];

    $sql = mysqli_query($conexion, "SELECT * FROM recepcionleche WHERE fecha LIKE '".$anio."-".$mes."-".$dia."%'; ");
    
    if (mysqli_num_rows($sql) == 0) {
        echo "<tr><td colspam = 5>No hay datos</td></tr>";
    } else {
        while ($fila = mysqli_fetch_assoc($sql)) {
          echo $fila["id_leche"];
        }
    }
?>