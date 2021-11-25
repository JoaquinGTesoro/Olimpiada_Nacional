hoy = new Date();
mesActual = hoy.getMonth();
anioActual = hoy.getFullYear();
anioSeleccionado = document.getElementById("anio");
mesSeleccionado = document.getElementById("mes");

meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

anioMes = document.getElementById("fecha-completa");
mostrarCalendario(mesActual, anioActual);

function siguiente() {
    anioActual = (mesActual === 11) ? anioActual + 1 : anioActual;
    mesActual = (mesActual + 1) % 12;
    mostrarCalendario(mesActual, anioActual);
}

function previo() {
    anioActual = (mesActual === 0) ? anioActual - 1 : anioActual;
    mesActual = (mesActual === 0) ? 11 : mesActual - 1;
    mostrarCalendario(mesActual, anioActual);
}

function saltar() {
    anioActual = parseInt(anioSeleccionado.value);
    mesActual = parseInt(mesSeleccionado.value);
    mostrarCalendario(mesActual, anioActual);
}

function mostrarCalendario(mes, anio) {

    let primerDia = (new Date(anio, mes)).getDay();
    const calendarioInfo = document.getElementById("calendario-info");


    calendarioInfo.innerHTML = "";


    anioMes.innerHTML = meses[mes] + " " + anio;
    anioSeleccionado.value = anio;
    mesSeleccionado.value = mes;


    let fecha = 1;
    for (let i = 0; i < 6; i++) {
    
        let fila = document.createElement("tr");

    
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < primerDia) {
                celda = document.createElement("td");
                textoCelda = document.createTextNode("");
                celda.appendChild(textoCelda);
                fila.appendChild(celda);
            } else if (fecha > diasEnMes(mes, anio)) {
                break;
            } else {
                celda = document.createElement("td");
                textoCelda = document.createTextNode(fecha);
                if (fecha === hoy.getDate() && anio === hoy.getFullYear() && mes === hoy.getMonth()) {
                    celda.classList.add("hoy");
                }
                celda.appendChild(textoCelda);
                fila.appendChild(celda);
                fecha++;
            }


        }

        calendarioInfo.appendChild(fila);

        enviarDatos();
    }

}

function diasEnMes (mes, anio) {
    return new Date(anio, mes, 0).getDate();
}

function enviarDatos() {
    const formulario = document.querySelector(".formulario");
    console.log(formulario);
    const diaInput = document.getElementById("dia-input")
    const mesInput = document.getElementById("mes-input")
    const anioInput = document.getElementById("anio-input")
    const tds = document.querySelectorAll("td");
   
    tds.forEach(elemento => {
        elemento.addEventListener('click', () => {
            const mesSelect = document.getElementById("mes");
            const anioSelect = document.getElementById("anio");
            if(elemento.innerText != "") {
                diaInput.value = elemento.innerText;
                mesInput.value = parseInt(mesSelect.value) + 1;
                anioInput.value = anioSelect.value;
                formulario.submit();
            }
        })
    })
}

