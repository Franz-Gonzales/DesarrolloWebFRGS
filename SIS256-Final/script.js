function incrementarContador() {
    const contador = document.getElementById('contador');
    var contadorNum = parseInt(contador.textContent);
    contador.textContent = contadorNum + 1;
}

function cambiarFondo() {

    const id_contenido = document.getElementById('selecciona-elemento').value;
    const color = document.getElementById('color-fondo').value;
    var elemento = document.getElementById(id_contenido);

    elemento.style.backgroundColor = color;
}




function eliminar(CU){
    console.log(CU);

    cargarContenido2('pregunta3.php?CU=' + CU);
}

function cargarContenido2(abrir) {
	var contenido = document.getElementById('contenido');
    var titulo = document.getElementById('titulo');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText;
            titulo.innerHTML = 'Pregunta 2';
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



function cargarContenido3(abrir) {
	var detalles = document.getElementById('detalles');
    var opciones = document.getElementById('opciones');
    var titulo = document.getElementById('titulo');
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = '';


	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			detalles.innerHTML = ajax.responseText;
            opciones.innerHTML = 'Asignaturas';
            titulo.innerHTML = 'Pregunta 3';
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


function mostrarHorarios(materia) {
	var contenido = document.getElementById('contenido');

	var ajax = new XMLHttpRequest() 
	ajax.open("get", "horarios.php?materia="+materia, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}




function cargarContenido4(abrir) {
	var detalles = document.getElementById('detalles');
    var opciones = document.getElementById('opciones');
    var titulo = document.getElementById('titulo');
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = '';

	var ajax = new XMLHttpRequest() 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			detalles.innerHTML = ajax.responseText;
            opciones.innerHTML = 'Calificaciones';
            titulo.innerHTML = 'Pregunta 4';
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}



function editarCalificaciones(materia) {
    var contenedor = document.getElementById("contenido");

    fetch("editarCalificaciones.php?materia=" + materia)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
    });
}

function registrarCalificaciones(){
	var contenedor = document.getElementById('contenido');
	var formulario = document.getElementById("form-edit");
	var parametros = new FormData(formulario);

	var ajax = new XMLHttpRequest();
	ajax.open("POST", 'registrarCalificacion.php', true);

	ajax.onreadystatechange = ()=>{
		if(ajax.readyState == 4){
			contenedor.innerHTML = ajax.responseText;
			
            setTimeout(() => {
                editarCalificaciones();
            }, 1000);
		}
	}

	ajax.send(parametros);
}



function cargarContenido5(abrir) {
    var contenedor = document.getElementById("contenido");
    var titulo = document.getElementById('titulo');
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
        titulo.innerHTML = 'Pregunta 5';
    });
}

function registrarInforme(){
    var contenido = document.getElementById("contenido");
    var formulario = document.getElementById("form-informe");
    var parametros = new FormData(formulario);

    fetch("registrarInforme.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => {
        contenido.innerHTML = data;
    });
}


