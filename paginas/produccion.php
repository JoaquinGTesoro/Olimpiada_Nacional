<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../media/queso_simbolo.svg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Producción</title>
</head>
<body>
    <header class="split">
        <a href="principal.html"><img src="../media/logo2.png" alt="" class="logo"></a>
	</header>
    <main>
        <h1>Etapa producción</h1>
        <!-- Cantidad de litros automaticamente, seleccionar fermento, calcular cantidad de fermento  -->
        <form action="">
            <div class="form-container form-il">
                <label for="codigo">Codigo de producción:</label>
                <input type="number" name="codigo">
            </div>
            <div class="form-container form-br">
                <label for="fecha">Fecha: </label>
                <input type="date" name="fecha">
            </div>
            <div class="form-container form-il">
                <label for="litros">Litros totales: </label>
                <input type="number" name="litros" step="0.01">
            </div>
            <div class="form-container form-br">
                <label for="fermento">Seleccione un fermento: </label>
                <select name="fermento" id="">
        
                </select>
            </div>
            <div class="form-container form-il">
                <label for="cantidad-fermento">Cantidad de fermento necesario:</label>
                <input type="number" name="cantidad-fermento">
            </div>
            <div class="form-container form-il">
                <label for="temperatura">Temperatura:</label>
                <input type="number" name="temperatura">
            </div>
            <div class="form-container form-il">
                <label for="humedad">Humedad:</label>
                <input type="number" step="0.01" name="humedad">
            </div>
            <div class="form-container form-br">
                <label for="tipo-queso">Tipo de queso:</label>
                <input type="text" name="tipo-queso">
            </div>
            <div class="form-container form-il">
                <label for="sal">Sal:</label>
                <input type="number" step="0.01" name="sal">
            </div>
            <div class="form-container form-il">
                <label for="cacl2">Cloruro de calcio (CaCL2):</label>
                <input type="number" step="0.01" name="cacl2">
            </div>
            <div class="form-container form-il">
                <label for="cuajo">Cuajo:</label>
                <input type="number" step="0.01" name="cuajo">
            </div>
            <div class="form-container form-il">
                <label for="acido-lactico">Ácido Láctico:</label>
                <input type="number" step="0.01" name="acido-lactico">
            </div>
            <div class="form-container form-br">
                <label for="observaciones">Observaciones:</label>
                <input type="text" name="observaciones">
            </div>
            <input type="submit" value="Guardar" class="btn">
        </form>
    </main>
</body>
</html>