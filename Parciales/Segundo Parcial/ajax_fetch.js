
function cargarContenido(abrir) {
    var contenido = document.getElementById('menu');
    var mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = "";

    var ajax = new XMLHttpRequest();

    ajax.open("get", abrir, true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            // console.log(ajax.responseText);
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

    
//? FETCH
function cargarContenidoFetch(abrir) {
    var contenedor;
    contenedor = document.getElementById("menu");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => (contenedor.innerHTML = data));
  }
  

  //? PARA EL EJERCICIO 2
  function mostrarFotos(img){

    var principal = document.getElementById('principal');
    var mensaje = document.getElementById('mensaje')

    principal.innerHTML = `<img src="./images/${img}" alt="img">`;
    mensaje.innerHTML = img;
}




//? PARA LA PREGUNTA 3
function abrirContenidoFetch(abrir) {
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
            // console.log(ajax.responseText);
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}






  //? EJERCICIO 4
  function autenticarUsuario() {
    // alert('entro');
    var contenido = document.getElementById('principal');
    var formulario = document.getElementById('form-login');
    var parametros = new FormData(formulario);

    var ajax =  new XMLHttpRequest();
    ajax.open("POST", "autenticar.php", true);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            // cargarContenido('./Ejercicio3/read.php');
            // cargarContenido('./Ejercicio3/prueba.html');
        }
    }

    console.log(parametros)
    ajax.send(parametros);
}

function actualizar(id, nivel){
    // alert(id, nivel);
    cargarContenido('update.php?id=' + id + '&nivel=' + nivel);
    // cargarContenido('./Ejercicio3/listar.php');
    setTimeout(() => {
        cargarContenido('listar.php')
    }, 10);
}








//? PARA EL EJERCICIO 5

function abrirContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById("principal");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => (contenedor.innerHTML = data));
}


function mostrarLibros() {

    var fotografia = document.getElementById("fotografia");
    var option = fotografia.value;

    // console.log(fotografia.innerHTML);
    fetch("datos.php")
        .then(response => response.text())
        .then(data => {

            var objeto = JSON.parse(data);
            var select = `<option value="seleccionar">Seleccionar</option>`;
            // var select = `<option value="seleccionar">Seleccionar</option>`;

            for (var i = 0; i < objeto.length; i++) {
                
                select += `<option value="${objeto[i].imagen}">${objeto[i].titulo}</option>`;
                // let img = document.createElement('img');
                // img.src = objeto[i].titulo;
                // img.with = "200px"
            }
            fotografia.innerHTML = select;
            fotografia.value = option;

        });

}
function mostrarFotoLibros(){

    var imagen = document.getElementById("fotografia").value;
    var fotos_libros = document.getElementById("fotos-libros");
    
    // console.log(imagen.value);
    var img =`<img src="./images/${imagen}" alt="${imagen}" width="400">`;

    fotos_libros.innerHTML = img;

    document.getElementById("fotografia").value = imagen;
    // imagen.value = img;

}

// function mostrarFotoLibro(){

//     var imagen = document.getElementById("libros").value;
//     var content = document.getElementById("fotos-libros");
    

//     var html=`<img src="Imagenes/${imagen}" alt="${imagen}" width="400">`;

//     content.innerHTML = html;

//     document.getElementById("libros").value = imagen;

// }




















  



































	