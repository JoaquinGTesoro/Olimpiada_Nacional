<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../media/queso_simbolo.svg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Agregar proveedor</title>
</head>
<body>
    <header class="split">
		<a href="principal.html"><img src="../media/logo2.png" alt="" class="logo"></a>
	</header>
	<main>
		<h1>Agregar proveedor</h1>

        <form action="../script/agregarProveedor.php" method="POST">
            <div class="form-container form-br">
                <label for="nombre">Nombre completo:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="form-container form-il">
                <label for="patente">Patente:</label>
                <input type="text" name="patente" id="patente">
            </div>
            <div class="form-container form-br">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-container form-br">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <div class="form-container form-br">
                <label for="localidad">Localidad:</label>
                <input type="text" name="localidad" id="localidad">
            </div>
            <div class="form-container form-br">
                <label for="empresa">Empresa:</label>
                <input type="text" name="empresa" id="empresa">
            </div>
            <input type="submit" value="Guardar" class="btn">
        </form>
    </main>
</body>
</html>