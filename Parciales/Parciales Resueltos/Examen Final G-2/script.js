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