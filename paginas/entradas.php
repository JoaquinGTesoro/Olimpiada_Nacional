<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../media/queso_simbolo.svg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/calendario.css">
    <title>Entradas</title>
</head>
<body>
    <header class="split">
        <a href="principal.html"><img src="../media/logo2.png" alt="" class="logo"></a>
    </header>
    <main>
        <h1>Seleccione una fecha</h1>
        <div class="container">
            <div class="tarjeta">
                <h3 class="titulo" id="fecha-completa"></h3>
                <table class="tabla" id="calendario">
                    <tr>
                        <th>Dom</th>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mie</th>
                        <th>Jue</th>
                        <th>Vie</th>
                        <th>Sab</th>
                    </tr>
                    <tbody id="calendario-info">
                    </tbody>
                </table>
                <div class="btns-saltar">
                    <button class="btn" id="previo" onclick="previo()">Previo</button>
                    <button class="btn" id="siguiente" onclick="siguiente()">Siguiente</button>
                </div>
                <br/>
                <div class="form-saltar">
                    <label class="" for="mes">Saltar a: </label>
                    <select class="btn-select" name="mes" id="mes" onchange="saltar()">
                        <option value=0>Jan</option>
                        <option value=1>Feb</option>
                        <option value=2>Mar</option>
                        <option value=3>Apr</option>
                        <option value=4>May</option>
                        <option value=5>Jun</option>
                        <option value=6>Jul</option>
                        <option value=7>Aug</option>
                        <option value=8>Sep</option>
                        <option value=9>Oct</option>
                        <option value=10>Nov</option>
                        <option value=11>Dec</option>
                    </select>
                    <label for="anio"></label><select class="btn-select" name="anio" id="anio" onchange="saltar()">
                    <option value=2021>2021</option>
                    <option value=2022>2022</option>
                    <option value=2023>2023</option>
                    <option value=2024>2024</option>
                    <option value=2025>2025</option>
                    <option value=2026>2026</option>
                    <option value=2027>2027</option>
                    <option value=2028>2028</option>
                    <option value=2029>2029</option>
                    <option value=2030>2030</option>
                </select></div>
            </div>
        </div>

        <div class="form-oculto" id="formulario">
            <form class="formulario" action="verEntrada.php" method="GET">
                <input type="hidden" name="dia" value="0" id="dia-input">
                <input type="hidden" name="mes" value="0" id="mes-input">
                <input type="hidden" name="anio" value="0" id="anio-input">
            </form>
        </div>
    </main>
<script src="scriptCalendario.js"></script>
</body>
</html>