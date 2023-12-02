function limpiar(){
    document.getElementById('password').value = "";
}


function agregarNumeros(numero){
    var password = document.getElementById('password');
    // var contrasena = numero.toString();
    // password.value += contrasena;
    password.value += numero;
}

function borrar(){
    var password = document.getElementById('password').value;
    // console.log(password);
    
    var ultimo_posicion = password.length;

    // console.log(ultimo_posicion);

    var delete_password = password.slice(0, ultimo_posicion - 1);
    document.getElementById('password').value = delete_password;
}


function abrirCalificaciones(materia) {
    cargarContenido('editarcalificaciones.php?materia=' + materia);
}

function cargarContenido(abrir) {
   
    var contenedor = document.getElementById("contenido");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => (contenedor.innerHTML = data));
  }



  function editarCalificacion(){
	cargarContenido('editarcalificaciones.php?id=' + id);
	
}


//? FUNCION PARA ACTUALIZAR EN BD
function update(){
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario = document.getElementById("form-edit");
	var parametros = new FormData(formulario);

	var ajax = new XMLHttpRequest();
	ajax.open("POST", 'registrarCalificacion.php', true);

	ajax.onreadystatechange = ()=>{
		if(ajax.readyState == 4){
			contenedor.innerHTML = ajax.responseText;
			// cargarContenido('read.php')
		}
	}

	ajax.send(parametros);
}