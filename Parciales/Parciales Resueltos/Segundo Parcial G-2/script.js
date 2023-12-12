
//? PARA EL EJERCICIO 1
function cargarContenido(abrir) {

	var menu = document.getElementById('botones');
    var mensaje = document.getElementById('titulo');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			menu.innerHTML = ajax.responseText;
            mensaje.innerHTML = "Gonzales Suyo Franz Reinaldo C.U. 35-5335";
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function historial(numero){
    var historial = document.getElementById('historial');
    var titulo = document.getElementById('titulo');

    historial.innerHTML += `<p>Presionó ${numero}</p>`;
    titulo.innerHTML = `Pregunta ${numero}`;
}



//? PARA EL EJERCICIO 2
function cargarContenido2(abrir){
    var principal = document.getElementById("principal");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => principal.innerHTML = data);
}

function calcular(){

    var resultado = document.getElementById('resultado');
    var numero_tabla = parseInt(document.getElementById('num_tabla').value);
    var operaciones = document.getElementsByName('operacion');
    var numero = parseInt(document.getElementById('numero').value);

    var operacion = Array.from(operaciones).find(oper => oper.checked);
    console.log(operacion.value);

    var html = '';
    switch(operacion.value){
        case 'suma':
            html = '<table>';
            for(let i = 1; i <= numero; i++){
                html += `
                    <tr>
                        <td>${i}</td>
                        <td>+</td>
                        <td>${numero_tabla}</td>
                        <td>=</td>
                        <td>${numero_tabla + i}</td>
                    </tr>
                `
            }
            html += '</table>';
            break;

        case 'resta':
            html = '<table>';
            for(let i = numero_tabla; i <= numero; i++){
                html += `
                    <tr>
                        <td>${i}</td>
                        <td>-</td>
                        <td>${numero_tabla}</td>
                        <td>=</td>
                        <td>${i - numero_tabla}</td>
                    </tr>
                `
            }
            html += '</table>';
            break;

        case 'factorial':
            html = '<table>';
            for(let i = numero_tabla; i <= numero; i++){
                let factorial = calcularFactorial(i);
                html += `
                    <tr>
                        <td>Factorial</td>
                        <td>${i}</td>
                        <td>=</td>
                        <td>${factorial}</td>
                    </tr>
                `
            }
            html += '</table>';
            break;

        default:
            html = 'Error';
            break;
    }

    resultado.innerHTML = html;
}

function calcularFactorial(numero){
    if(numero == 0 || numero == 1){
        return 1;
    }else{
        return numero * calcularFactorial(numero - 1);
    }
}



//? PARA EL EJERCICIO 3
function cargarContenido3(abrir) {

	var principal = document.getElementById('principal');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			principal.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


function introducir() {
    var principal = document.getElementById('principal');
    var formulario = document.getElementById("form-numero");
    var parametros = new FormData(formulario);
    
    var ajax = new XMLHttpRequest() 
    ajax.open("POST", 'introducir.php', true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {

            principal.innerHTML = ajax.responseText;
        }
    }

    ajax.send(parametros);
}


function calcularSuma(){
    var numeros = document.getElementsByName('numeros');

    var suma = 0;
    for(let i = 0; i < numeros.length; i++){
        suma += parseInt(numeros[i].value);
    }

    document.getElementById('suma').innerHTML = suma;
}


//? PARA LA PREGUNTA 4
function cargarContenido4(abrir){
    var principal = document.getElementById("principal");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => principal.innerHTML = data);
}

function formMasivo() {
    var principal = document.getElementById("principal");
    var formulario = document.getElementById("form-numero");
    var parametros = new FormData(formulario);

    fetch("form-insertarmasivo.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => (principal.innerHTML = data));
}


function insertar(){
    var principal = document.getElementById("principal");
    var formulario = document.getElementById("form-masivo");
    var parametros = new FormData(formulario);

    fetch("insertar.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => {
        principal.innerHTML = data;

        cargarContenido4('listar.php');
    });
}



//? PARA EL EJERCICIO 5
function cargarContenido5(abrir){
    var principal = document.getElementById("principal");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => principal.innerHTML = data);
}


function mostrarCalendario(){

    var mes = parseInt(document.getElementById('mes').value);
    var anio = parseInt(document.getElementById('anio').value);

    calendario('calendario.php?mes=' + mes + '&anio=' + anio);
}


function calendario(abrir) {

	var resultado = document.getElementById('resultado');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			resultado.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
