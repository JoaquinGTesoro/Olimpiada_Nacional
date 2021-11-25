<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../media/queso_simbolo.svg">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/formulario.css">
  <!-- <link rel="stylesheet" href="../css/index.css"> -->
  <title>Recepción de leche</title>
</head>
<body>
	<header class="split">
		<a href="principal.html"><img src="../media/logo2.png" alt="" class="logo"></a>
	</header>
	<main>
		<h1>Recepcion de leche</h1>
		<form action="../script/agregarEntrada.php" method="POST">
			<div class="form-container form-br">
				<label for=>Proveedor:</label>
				<select name="proveedor">
					<?php 
					include '../script/conexion.php';
					$sql=mysqli_query($conexion, "SELECT * FROM proveedores");

					if (mysqli_num_rows($sql) == 0) {
				      echo "<tr><td colspam = 5>No hay datos</td></tr>";
				    } else {
				      while ($fila = mysqli_fetch_assoc($sql)) {
				        echo "
				        <option value=".$fila['id'].">".$fila['nombre']." </option>";
				    		}
					}

					?>
				</select>
			</div>
		  <div class="form-container form-br">
			  <label for="fecha">Fecha:</label>
			  <input type="input" name="fecha" id="fecha" readonly value="<?php echo date('d-m-Y H:i:s');?>">
		  </div>
			<div class="form-container form-il">
				<label for="codigo">Código:</label>
				<!-- Codigo de leche identifica la entrada, despues se suma y se form-container forma el lote en otra tabla y se vinculan ambas (Al generar el final del dia el numero de lote se recorre la tabla y todas en las que coincidan la fecha se les asigna el numero de lote generado al final del dia) -->
				<input type="number" name="codigo" min="0">
			</div>
		  <div class="form-container form-il">
			  <label for="litros-leche">Litros:</label>
			  <input type="number" name="litros-leche" step="0.01">
		  </div>
			<div class="form-container form-il">
				<label for="ph">Escala de pH: </label>
				<input type="number" name="ph" step="0.01">
			</div>
		  <div class="form-container form-il">
			  <label for="temperatura">Temperatura(C°):</label>
			  <input type="number" name="temperatura">
		  </div>
		  <div class="form-container form-il">
			  <label for="densidad">Densidad(g/ml): </label>
			  <input type="number" name="densidad" id="" placeholder="g/ml" step="0.01">
		  </div>
		  <div class="form-container form-il">
			  <label for="alcohol">Alcohol(%):</label>
			  <input type="number" name="alcohol" id="">
		  </div>
		  <div class="form-container form-br">
			  <label for="sensorial">Sensorial:</label>
			  <input type="text" name="sensorial" id="">
		  </div>
		  <div class="form-container form-br">
			  <label for="responsable">Responsable:</label>
			  <input type="text" name="responsable">
		  </div>
		  <div class="form-container form-br">
			  <label for="responsable">Observaciones:</label>
			  <input type="text" name="observaciones">
		  </div>
		  <input type="submit" value="Guardar" class="btn">
		</form>
	</main>
  
  <!-- <a href="index.html">Finalizar carga de día</a> -->
  <!-- Se guarda toda la informacion en otra tabla con el numero de lote (generado automaticamente), fecha, lts -->
  <!-- Siguen al paso siguiente y pasan a la produccion -->
  <!-- Calcular cuanto fermento se necesita para esa cantidad de leche -->
</body>
</html>