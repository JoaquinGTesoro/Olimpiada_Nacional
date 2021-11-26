<?php
    include_once('../script/conexion.php');
    include_once('../script/funciones.php');

    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../media/queso_simbolo.svg">
    <link rel="stylesheet" href="../css/main.css">
    <title>Entradas Leche <?php echo "$dia/$mes/$anio" ?></title>
</head>
<body>
    <header class="split">
		<a href="principal.html"><img src="../media/logo2.png" alt="" class="logo"></a>
	</header>
    <main>
        <div class="table-container">
            <table>
                <tr>
                    <th>Codigo</th>
                    <th>Lote</th>
                    <!-- Funcioon generar nombre de proveedor -->
                    <th>Proveedor</th>
                    <th>Litros</th>
                    <th>pH</th>
                    <th>Temperatura</th>
                    <th>Densidad</th>
                    <th>Alcohol</th>
                    <th>Sensorial</th>
                    <th>Responsable</th>
                    <th>Observacion</th>
                </tr>
                <tbody>
                    <?php mostrarEntradas($conexion, $anio, $mes, $dia); ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>