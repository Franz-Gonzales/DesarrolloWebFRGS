var dias = [
    "Domingo",
    "Lunes",
    "Martes",
    "Miercoles",
    "Jueves",
    "Viernes",
    "Sabado",
  ];

//   for (i in dias) {
//     console.log(dias[i]);
//   }

  var string = "Hola mundo";
  // sacar un elemento de la posicion
  console.log('la letra en su posicio i es: ' + string.charAt(5)); 

  // concatenar una cadena, unir cadena
  console.log(string.concat(' ', 'natural'));

  function fibonacci(a){
    var b = [0, 1];
    for (i = 2; i < a; i++){
      b[i] = b[i - 1] + b[i - 2];
    }
    return b;
  }

  console.log(fibonacci(10));