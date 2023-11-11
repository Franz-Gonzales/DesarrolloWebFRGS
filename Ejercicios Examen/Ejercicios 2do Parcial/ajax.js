
function cargarContenido(abrir) {
    var contenido = document.getElementById('contenido');
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


	// //? PREGUNTA 1
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
	
    
    //? PREGUNTA 2
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






    //? PREGUNTA 3
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
    function mostrarFotosLibros(){
        // var libros = document.getElementById('libros').value;
        var container_libros = document.getElementById('fotos-libros')

        fetch("./Ejercicio5/datos.php")
        .then((respuesta) => respuesta.text())
            .then((data) => {
                var objeto = JSON.parse(data);
                
                container_libros.innerHTML = '';

                for (var i = 0; i < objeto.length; i++) {


                    // const imagen = document.createElement("img");
                    // imagen.id = objeto[i].id;
                    // imagen.src = './Ejercicio5/img/' + objeto[i].imagen;
                    // imagen.width = '200px';
                    // imagen.alt = "img";
                    // document.getElementById('fotos-libros').appendChild(imagen);
                }
            });
    }

 