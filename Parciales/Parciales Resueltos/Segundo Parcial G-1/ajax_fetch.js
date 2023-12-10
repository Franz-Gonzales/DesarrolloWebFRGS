
//? PARA EL EJERCICIO 1
function cargarContenido(abrir) {
    var contenido = document.getElementById('menu');
    var mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = "";

    var ajax = new XMLHttpRequest();

    ajax.open("get", abrir, true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            contenido.style.background = 'yellow';
            // console.log(ajax.responseText);
            putNombre();
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function putNombre(){
    var mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = 'Gonzales Suyo Franz Reinaldo - C.U. 35-5335';
}

    
//? FETCH  PARA EL EJERCICIO 2
function cargarContenido2(abrir) {
    var contenedor;
    contenedor = document.getElementById("menu");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => {
        contenedor.innerHTML = data;
        contenedor.style.background = '#f5f2f2';
    });
}
  

  function mostrarFotos(img){

    var principal = document.getElementById('principal');
    var mensaje = document.getElementById('mensaje')

    principal.innerHTML = `<img src="./images/${img}" alt="img">`;
    mensaje.innerHTML = img;
}




//? PARA LA PREGUNTA 3
function abrirContenido3(abrir) {
    var menu = document.getElementById('menu');
    var mensaje = document.getElementById('mensaje');
    var principal = document.getElementById('principal');
    mensaje.innerHTML = "";
    menu.innerHTML = "";

    var ajax = new XMLHttpRequest();

    ajax.open("get", abrir, true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {
            principal.innerHTML = ajax.responseText;
            menu.style.background = '#f5f2f2';
            // console.log(ajax.responseText);
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarContenido1(abrir){
    var menu = document.getElementById("menu");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => menu.innerHTML = data);
}


function autenticar() {
    let mensaje = document.getElementById('mensaje');
    var encabezado = document.getElementById('encabezado');
    var menu = document.getElementById('menu');
    var principal = document.getElementById("principal");
    var formulario = document.getElementById("form_login");
    var parametros = new FormData(formulario);

    encabezado.innerHTML = "";

    fetch("autenticar.php", { method: "POST", body: parametros })
        .then((response) => response.json())
        .then((data) => {
            console.log(data); 
            if (data.status === 'success') {
                console.log(data.message);

                // cargarCambios(data.usuario);

                cargarContenido1('botones.html');

                menu.style.background = 'yellow';
                encabezado.style.width = "98%";
                encabezado.style.background = 'red';
                encabezado.innerHTML = `Usuario autenticado ${data.usuario['nombrecompleto']} Nivel ${data.usuario['nivel']}`;
                encabezado.style.padding = "10px"
                encabezado.style.textAlign = "center";
                encabezado.style.border = "2px solid black";
                encabezado.style.color = "white";

                principal.innerHTML = "";
            } else {
                // console.log(data.message);
                mensaje.innerHTML = data.message;
            }
        });
}




//? EJERCICIO 4

function cargarContenido4(abrir) {
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




//? PARA EL EJERCICIO 5

function libros(){

    var mensaje = document.getElementById('mensaje');
    var principal = document.getElementById('principal');
    var content_img = document.createElement('div');
    var selectLibro = document.createElement('select');
    var title = document.createElement('h2');
    selectLibro.id = "libros";
    var option = selectLibro.value;
    
    fetch("datos.php")
    .then(response => response.text())
    .then(data => {
        
            var objeto = JSON.parse(data);

            title.innerHTML = 'Titulos de libros';
            var html = `<option value="">Seleccionar un titulo</option>`;

            for(let i = 0; i < objeto.length; i++){

                html += `<option value="${objeto[i].imagen}">${objeto[i].titulo}</option>`;
            }
            selectLibro.innerHTML = html;

            principal.appendChild(title);
            principal.appendChild(selectLibro);
            principal.appendChild(content_img);

            selectLibro.value = option;
            content_img.style.marginTop = "1.5rem";
            selectLibro.style.padding = "8px";
            selectLibro.style.border = "2px solid rgb(3, 174, 34)";

            selectLibro.onchange = () => {

                var img = selectLibro.value;
                var imagen = `<img src="./images/${img}" alt="${img}">`;

                content_img.innerHTML = imagen;
                mensaje.innerHTML = img;
            }

    });
}






















  



































	