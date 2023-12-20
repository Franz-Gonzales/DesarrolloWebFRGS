//? PARA EL EJERCICIO 2

function cargarOperaciones(abrir) {
	var sub_menu = document.getElementById('sub-menu');
    var titulo = document.getElementById('titulo');
    let opcion = document.getElementById('opcion');
    let contenido = document.querySelector('.contenido');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			sub_menu.innerHTML = ajax.responseText;
            titulo.innerHTML = 'Pregunta 2';
            opcion.innerHTML = 'Operaciones';
            contenido.innerHTML = '';
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


var resultados = [];
function generarOperacion(operacion){
    console.log(operacion);

    let contenido = document.getElementById('contenido');
    var btn_calificar = document.createElement('button')

    resultados = [];
    contenido.innerHTML = '';
    contenido.innerHTML += `<h2>${operacion}</h2>`;
    
    for(let i = 1; i <= 5; i++){

        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;

        var resultado = 0;
        var ope = '';
        switch(operacion){
            case 'Suma':
                resultado = num1 + num2;
                ope = '+';
                break;
            case 'Resta':
                resultado = num1 - num2;
                ope = '-';
                break;
            case 'Multiplicacion':
                resultado = num1 * num2;
                ope = '*';
                break;
            case 'Division':
                // Evitar división por cero
                if (num2 !== 0) {
                    resultado = num1 / num2;
                    ope = '/';
                } else {
                    num2 = Math.floor(Math.random() * 10) + 1;
                    resultado = num1 / num2;
                    ope = '/';
                }
                break;
            default:
                break;

        }
        resultados.push(resultado);
        contenido.innerHTML += `<p class="respuestas">${num1} ${ope} ${num2} = <input type="number" name="respuestas" value=""></p>`;
    }

    btn_calificar.innerHTML = "Calificar";
    btn_calificar.classList = "btn_calificar";
    contenido.appendChild(btn_calificar);

    btn_calificar.onclick = ()=>{
        calificar();
    }
    
    // btn_calificar.setAttribute("onclick", "calificar()");
}


function calificar(){

    var respuestas = document.getElementsByName('respuestas');

    if(resultados.length == respuestas.length){

        for(let i = 0; i < respuestas.length; i++){

            if(respuestas[i].value == resultados[i]){
                respuestas[i].style.background = "rgb(8, 190, 8)";
            }else{
                respuestas[i].style.background = "red";
            }
        }
    }else {
        alert('Por favor responda todas las preguntas');
    }
}





//? PARA EL EJERCICIO 3

function eliminar(CU){
    console.log(CU);

    cargarContenido3('pregunta3.php?CU=' + CU);
}

function cargarContenido3(abrir) {
	var contenido = document.getElementById('contenido');
    var titulo = document.getElementById('titulo');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText;
            titulo.innerHTML = 'Pregunta 3';
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


function insertarAlumno() {
    var contenido = document.getElementById('contenido');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);
    
    var ajax = new XMLHttpRequest() 
    ajax.open("POST", 'pregunta3.php', true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {

            contenido.innerHTML = ajax.responseText;
        }
    }

    ajax.send(parametros);
}



//? PARA EL EJERCICIO 4

function pregunta4(abrir) {
    var contenedor = document.getElementById("sub-menu");
    var titulo = document.getElementById("titulo");
    var contenido = document.getElementById('contenido');

    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
        titulo.innerHTML = "Pregunta 4";
        contenido.innerHTML = '';
    });
}

function cargarContenido4(abrir) {

    var contenido = document.getElementById('contenido');

    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenido.innerHTML = data;
    });
}


function insertarLibro(){
    var contenido = document.getElementById("contenido");
    var formulario = document.getElementById("form-insert");
    var parametros = new FormData(formulario);

    fetch("insertarLibro.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => {
        contenido.innerHTML = data;

        setTimeout(()=>{
            cargarContenido4('listarLibros.php');
        }, 1000);
    });
}


function update(id){
    
    cargarContenido4('form-updateLibro.php?id=' + id);
}

function updateLibro(){
    var contenido = document.getElementById("contenido");
    var formulario = document.getElementById("form-update");
    var parametros = new FormData(formulario);

    fetch("updateLibro.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => {
        contenido.innerHTML = data;

        setTimeout(()=>{
            cargarContenido4('listarLibros.php');
        }, 1000);
    });
}

function deleteLibro(id){

    cargarContenido4('deleteLibro.php?id=' + id);

    setTimeout(()=>{
        cargarContenido4('listarLibros.php');
    }, 1000);
}




//? PARA EL EJERCICIO 5

function cargarContenido5(abrir) {
    var contenido = document.getElementById('contenido');
    var titulo = document.getElementById('titulo');

    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenido.innerHTML = data;
        titulo.innerHTML = 'Pregunta 5';
    });
}


function mostrar(){
    var color = document.getElementById('color').value;
    var ide = document.getElementById('ides').value;
    var tipo_color = document.getElementById('tipo-color').value;
    var elemento = document.getElementById(ide);
    
    if(color !== '' && tipo_color !== '' && ide !== ''){

        var elementos = document.querySelectorAll('.color');

        elementos.forEach(elem =>{
            elem.style.background = '';
            elem.style.color = '';
        });

        if(tipo_color === 'background'){
            elemento.style.background = color;
        }else{
            elemento.style.color = color;
        }

        elemento.classList.add('color');
    }else{

        alert('Todos los campos son obligatorios');
    }
}
