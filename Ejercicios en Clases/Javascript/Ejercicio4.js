// 4. Definir una función que determine si la cadena de texto que se le pasa como parámetro es un palíndromo, es decir, si se lee de la misma forma desde la izquierda y desde la derecha. Ejemplo de palíndromo complejo: "La ruta nos aporto otro paso natural".

var cadena = "La ruta nos aporto otro paso natural";

// Función para verificar si una cadena es un palíndromo
function esPalindromo(cadena) {
    cadena = cadena.replace(/\s/g, "").toLowerCase();
    return cadena === cadena.split("").reverse().join("");
}

if (esPalindromo(cadena)) {
    console.log("La cadena es un palíndromo.");
} else {
    console.log("La cadena no es un palíndromo.");
}
