// Definir la función para verificar si un número es par o impar
// const numero = 6;

// function verificarParOImpar(numero) {
//     if (numero % 2 === 0) {
//       return "El número es par.";
//     } else {
//       return "El número es impar.";
//     }
//   }
  
//   console.log(verificarParOImpar(numero));
  

function esPalindromo(cadena) {
    // Eliminar espacios y convertir a minúsculas para hacer la comparación insensible a mayúsculas
    cadena = cadena.replace(/\s/g, "").toLowerCase();

    // Comparar la cadena original con su reverso
    return cadena === cadena.split("").reverse().join("");
}

// Ejemplo de uso
var texto = "La ruta nos aporto otro paso natural";

if (esPalindromo(texto)) {
    console.log("La cadena es un palíndromo.");
} else {
    console.log("La cadena no es un palíndromo.");
}