//? PARA EL EJERCICIO 1
function limpiar(){
    document.getElementById('password').value = "";
}

function agregarNumeros(numero){
    var password = document.getElementById('password');
    password.value += numero;
}

function borrar(){
    var password = document.getElementById('password').value;
    // console.log(password);
    
    var ultimo_posicion = password.length;
    var delete_password = password.slice(0, ultimo_posicion - 1);
    document.getElementById('password').value = delete_password;

}



//? PARA EL EJERCICIO 2

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



//? PARA EL EJERCICIO 3

function horarios(){
    var titulo = document.getElementById('titulo');
    var contenido = document.getElementById('contenido');
    let opcion = document.getElementById('opcion');
    var materias = document.querySelectorAll('.detalle');

    contenido.innerHTML = "";
    opcion.innerHTML = "Horarios";
    opcion.style.background = "orange";
    opcion.style.border = "2px solid black";
    titulo.innerHTML = 'Pregunta 3';

    materias.forEach(function(materia) {
        materia.style.fontWeight = "bold";
        materia.style.background = "rgba(176, 252, 237, 0.895)";
    });
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




//? PARA EL EJERCICIO 4
function calificaciones(){
    // alert('entro');
    let opcion = document.getElementById('opcion');
    var titulo = document.getElementById('titulo');
    var contenedor = document.getElementById("sub-menu");
    opcion.innerHTML = '';
    contenedor.innerHTML = '';
    titulo.innerHTML = 'Pregunta 4';

    let calificaiones = document.createElement('a');
    calificaiones.setAttribute('href', 'javascript:cargarContenido4("calificaciones.php")');
    calificaiones.innerHTML = 'Calificaciones';
    opcion.style.background = "orange";

    // Estilos al pasar el cursor sobre el elemento
    opcion.onmouseover = function() {
        this.style.backgroundColor = "orangered";
        this.style.color = "white";
    }
    
    // Estilos al quitar el cursor del elemento
    opcion.onmouseout = function() {
        this.style.backgroundColor = "orange";
        this.style.color = "black";
    }

    opcion.appendChild(calificaiones);
}


function cargarContenido4(abrir) {
    var contenedor = document.getElementById("sub-menu");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
    });
}


function editarCalificaciones() {
    var contenedor = document.getElementById("contenido");
    var materia = document.getElementById('materia').value;
    console.log(materia);

    fetch("editarCalificaciones.php?materia=" + materia)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
    });
}

function update(){
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

// Pregunta 4 y 5
document.addEventListener('DOMContentLoaded', function() {

    var btn4 = document.querySelector('.btn4');
    var btn5 = document.querySelector('.btn5');

    btn4.addEventListener('mouseover', function() {
        btn4.innerHTML = 'Calificaciones';
    });

    btn4.addEventListener('mouseout', function() {
        btn4.innerHTML = 'Pregunta 4';
    });

    btn5.addEventListener('mouseover', function() {
        btn5.innerHTML = 'Informes';
    });
  
    btn5.addEventListener('mouseout', function() {
        btn5.innerHTML = 'Pregunta 5';
    });
});



//? PARA EL EJERCICIO 5
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

