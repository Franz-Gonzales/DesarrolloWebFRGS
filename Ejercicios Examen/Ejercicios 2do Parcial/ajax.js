
function cargarContenido(abrir) {
    var contenido = document.getElementById('contenido');
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



	//? EJERCICIO 1
    var turno = 'X';

    function cambiarTurno() {
        if (turno == 'X') {
            turno = 'O';
        } else {
            turno = 'X';
        }
    }

    function marcarCasilla(id) {
        var casilla = document.getElementById(id);
		var mensaje = document.getElementById('mensaje');
		
        mensaje.innerHTML = '';
		if(casilla.innerHTML == ''){
            // console.log('la casilla esta vacia')
			casilla.innerHTML = turno;
			mensaje.innerHTML = 'Turno ' + turno;
		}else{
            mensaje.innerHTML = 'El campo ya esta marcado';
        }

        // if (casilla.innerHTML == '') {
        //     casilla.innerHTML = turno;
		// 	mensaje.innerHTML = 'Turno ' + turno;
        // }
		
        cambiarTurno();
    }
	


    
    //? EJERCICIO 2
    function mostrarResultado(){
        var nro_inicio = parseInt(document.getElementById('nro_inicial').value);
        var nro_mayor = parseInt(document.getElementById('nro_mayor').value);
        var operacion = document.getElementsByName('operacion');
        var mensaje = document.getElementById('mensaje');
        var resultado = document.getElementById('resultado');
        
        // console.log(nro_inicio, nro_mayor);
        console.log(operacion.length);

        var operar = Array.from(operacion).find(oper => oper.checked);

        var tipo_operar = operar.value;
        // console.log(operar.value);

        if(nro_inicio <= 10 && nro_mayor >= 1){

            resultado.innerHTML = '';
            switch(tipo_operar){
                case 'suma':
                    for(var i = 1; i <= nro_mayor; i++){
                        // console.log(i + ' + ' + nro_inicio + ' = ' + (i + nro_inicio));
                        resultado.innerHTML += i + ' + ' + nro_inicio + ' = ' + (i + nro_inicio) + '<br>';
                    }
                    break;
                case 'resta':
                    for(var i = 1; i <= nro_mayor; i++){
                        resultado.innerHTML += i + ' - ' + nro_inicio + ' = ' + (i - nro_inicio) + '<br>';
                    }
                    break;
                case 'multiplicacion':
                    for(var i = 1; i <= nro_mayor; i++){
                        resultado.innerHTML += i + ' x ' + nro_inicio + ' = ' + (i * nro_inicio) + '<br>';
                    }
                    break;
                case 'division':
                    for(var i = 1; i <= nro_mayor; i++){
                        resultado.innerHTML += i + ' / ' + nro_inicio + ' = ' + (i / nro_inicio) + '<br>';
                    }
                    break;
                default:
                    break;
            }

            mensaje.innerHTML = '';
        }else{ 
            mensaje.innerHTML = 'En el primer cuadro solo debe introducir un número menor a 10';
        }
        
    }






    //? EJERCICIO 3
    function autenticar() {
        // alert('entro');
        var contenido = document.getElementById('contenido');
        var formulario = document.getElementById('form-login');
        var parametros = new FormData(formulario);

        var ajax =  new XMLHttpRequest();
        ajax.open("POST", "./Ejercicio3/autenticar.php", true);
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
        cargarContenido('./Ejercicio3/update.php?id=' + id + '&nivel=' + nivel);
        // cargarContenido('./Ejercicio3/listar.php');
        setTimeout(() => {
            cargarContenido('./Ejercicio3/listar.php')
        }, 10);
    }
    



    //? EJERCICIO 4
    function ordenarLibros() {
        // alert('entro');
        cargarContenido('./Ejercicio4/listar.php?ordenar=titulo');
    }



    //? EJERCICIO 5

    function mostrarLibros() {

        var fotografia = document.getElementById("fotografia");
        var option = fotografia.value;
    
        // console.log(fotografia.innerHTML);
        fetch("./Ejercicio5/datos.php")
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
        var img =`<img src="./Ejercicio5/img/${imagen}" alt="${imagen}" width="400">`;
    
        fotos_libros.innerHTML = img;
    
        document.getElementById("fotografia").value = imagen;
        // imagen.value = img;
    
    }





    // function mostrarLibros(){
    //     var libros = document.getElementById('libros');
    //     // console.log(libros.value);

    //     fetch("./Ejercicio5/datos.php")
    //     .then((response) => response.text())
    //         .then((data) => {
    //             var objeto = JSON.parse(data);
                
    //             libros.innerHTML = '';

    //             for (var i = 0; i < objeto.length; i++) {

    //                 var option = document.createElement("option");
    //                 // imagen.width = "200px";
    //                 // imagen.src = `./Ejercicio5/img/${libros}`;
    //                 // imagen.alt = "img";
    //                 option.value = objeto[i].imagen;
    //                 option.innerHTML = objeto[i].titulo;

    //                 libros.appendChild(option);
    //             }
    //         });
    // }


    // function mostrarFotoLibros(){

    //     var fotos_libros = document.getElementById('fotos-libros');
    //     var libros = document.getElementById('libros');
    //     var imagen = document.createElement("img");

    //     console.log(libros.value);

    //     imagen.src = `./Ejercicio5/img/${libros.value}`;
    //     imagen.alt = "img";
    //     imagen.width = "200px";
    //     imagen.height = "400px";

    //     fotos_libros.appendChild(imagen);
    // }

 