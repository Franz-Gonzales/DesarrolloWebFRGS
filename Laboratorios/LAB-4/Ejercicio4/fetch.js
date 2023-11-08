function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById("container");
    fetch(abrir)
      .then((response) => response.text())
      .then((data) => contenedor.innerHTML = data);
  }
  

// function cargarContenido(abrir) {
//     var container = document.getElementById("container");
//     fetch(abrir)
//     .then((response) => response.text())
//     .then((data) => (container.innerHTML = data));
//  }



function autenticar() {
    var contenedor = document.getElementById("container");
    var formulario = document.getElementById("form-login");
    var parametros = new FormData(formulario);
  
    fetch("autenticar.php", { method: "POST", body: parametros })
      .then((response) => response.text())
      .then((data) => (contenedor.innerHTML = data));
  
    // setTimeout(() => {
    //   cargarContenido("read.php");
    // }, 1000);
  }

  