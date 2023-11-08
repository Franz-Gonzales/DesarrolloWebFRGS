function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('container2');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

//? FUNCION PARA REGISTRAR 
function registrarAlumno() {
	// alert('respondiendo');
    var contenedor;
    contenedor = document.getElementById('container2');
    var formulario = document.getElementById("form-registro");
    var parametros = new FormData(formulario);
    
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("POST", 'create.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
			cargarContenido('read.php');
        }
    }

    ajax.send(parametros);
}


//? FUNCION PARA ABRIR FORM ACTUALIZAR
function editarAlumno(id){
	cargarContenido('form_update_alumnos.php?id=' + id);
	
}


//? FUNCION PARA ACTUALIZAR EN BD
function update(){
	var contenedor;
	contenedor = document.getElementById('container2');
	var formulario = document.getElementById("form-update");
	var parametros = new FormData(formulario);

	var ajax = new XMLHttpRequest();
	ajax.open("POST", 'update.php', true);

	ajax.onreadystatechange = ()=>{
		if(ajax.readyState == 4){
			contenedor.innerHTML = ajax.responseText;
			cargarContenido('read.php')
		}
	}

	ajax.send(parametros);
}


//? FUNCION PARA ELIMINAR
function deleteAlumno(id){
	cargarContenido('delete.php?id=' + id)

	setTimeout(() => {
		cargarContenido('read.php')
	}, 1000);
}








function crea_lista_parametros() {
	var tTitulo = document.getElementById("tTitulo");
	var tIdentidad = document.getElementById("tIdentidad");
	var tNombres = document.getElementById("tNombres");
	var tApellidos = document.getElementById("tApellidos");
	var RGSexo = document.getElementById("RGSexo");
	var tEdad = document.getElementById("tEdad");
	var tEmail = document.getElementById("tEmail");
	var SDepartamento = document.getElementById("SDepartamento");
	var tProfesion = document.getElementById("tProfesion");
	var sTipo = document.getElementById("sTipo");
	var tNumeroDeposito = document.getElementById("tNumeroDeposito");
	return "tTitulo=" + encodeURIComponent(tTitulo.value) +
		"&tIdentidad=" + encodeURIComponent(tIdentidad.value) +
		"&tNombres=" + encodeURIComponent(tNombres.value) +
		"&tApellidos=" + encodeURIComponent(tApellidos.value) +
		"&nocache=" + Math.random();
}
function Preinscribir() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var cadena = crea_lista_parametros();
	
	 ajax = new XMLHttpRequest()
	ajax.open("POST", "preinscribir.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);

}


function autenticar() {
	var cadena = crea_lista_login();
	ajax = nuevoAjax();
	ajax.open("POST", "autenticar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			ingreso = document.getElementById('ingreso');
			ingreso.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);
}

function cerrar() {
	ajax = nuevoAjax();
	ajax.open("GET", "cerrar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			ingreso = document.getElementById('ingreso');
			ingreso.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(null);
}

function crea_lista_login() {
	var tUsuario = document.getElementById("usuario");
	var tContrasena = document.getElementById("pass");
	return "user=" + encodeURIComponent(tUsuario.value) +
		"&pass=" + encodeURIComponent(tContrasena.value) +
		"&nocache=" + Math.random();
}


function Registro() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var cadena = crea_lista_registro();
	ajax = nuevoAjax();
	ajax.open("POST", "registro.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);

}

function crea_lista_registro() {
	var nombre = document.getElementById("txtNombre");
	var apellido = document.getElementById("txtApellido");
	var sexo = document.getElementById("txtSexo");
	var user = document.getElementById("txtUsuarios");
	var pass = document.getElementById("txtContrasena");
	var nivel = document.getElementById("txtNivel");

	return "nombre=" + encodeURIComponent(nombre.value) +
		"&apellido=" + encodeURIComponent(apellido.value) +
		"&sexo=" + encodeURIComponent(sexo.value) +
		"&user=" + encodeURIComponent(user.value) +
		"&pass=" + encodeURIComponent(pass.value) +
		"&nivel=" + encodeURIComponent(nivel.value) +
		"&nocache=" + Math.random();
}

function cambiarColor(color) {
	document.body.style.background = color;
}













function listar() {
    var contenedor;
  
    contenedor = document.getElementById('datos');
    fetch('read.php')
        .then(response => response.text())
        .then(data => {
            objeto = JSON.parse(data)
            html = dibujar(objeto);
            contenedor.innerHTML = html;
        }
        );
    
    function dibujar(objeto) {
        console.log(objeto.length);     
      let html=`<table>
                <tr>
                <th>Fotografia</th>
                <th> Nombres</th>
                <th>Apellidos </th>
                <th>Celular</th>
                <th>Profesion</th>
                <th>Operaciones</th>
                </tr>`;
       for (i=0;i<objeto.length;i++)
       {
        html+=`<tr>
        <td><img width="100px" src="images/${objeto[i].fotografia} alt=""> </td>
        <td>${objeto[i].nombres} </td>
        <td>${objeto[i].apellidos}</td>
        <td>${objeto[i].celular}</td>
        <td>${objeto[i].profesion}</td>
        <td><a href="javascript:editarPersona(${objeto[i].id})">Editar</a>
        <a href="javascript:eliminarPersona(${objeto[i].id})">Eliminar</a>
        </td></tr>`
       } 
       html+=`</table>`;
       return html;
    }
    function cargarContenido(abrir) {
        var contenedor;
        contenedor = document.getElementById('datos');
        fetch(abrir)
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
    function editarPersona(id) {
        var contenedor;
        contenedor = document.getElementById('datos');
        fetch('form_update.php?id=' + id)
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
    function crearPersona() {
        var contenedor;
        contenedor = document.getElementById('datos');
        var formulario = document.getElementById("form-persona");
        var parametros = new FormData(formulario);
        fetch("create.php",
            {
                method: "POST",
                body: parametros
            })
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
}