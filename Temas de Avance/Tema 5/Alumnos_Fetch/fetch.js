function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("container2");
  fetch(abrir)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}

function registrarAlumno() {
  var contenedor = document.getElementById("container2");
  var formulario = document.getElementById("form-registro");
  var parametros = new FormData(formulario);

  fetch("create.php", { method: "POST", body: parametros })
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));

  setTimeout(() => {
    cargarContenido("read.php");
  }, 1000);
}

function editarAlumno(id) {
  cargarContenido("form_update_alumnos.php?id=" + id);
}

function update() {
  var contenedor = document.getElementById("container2");
  var formulario = document.getElementById("form-update");
  var parametros = new FormData(formulario);

  fetch("update.php", { method: "POST", body: parametros })
    .then((response) => response.text())
    .then((data) => {
      contenedor.innerHTML = data;

      // setTimeout(() =>{
      //   cargarContenido("read.php");
      // }, 1000);

    });
    
}

function deleteAlumno(id){
    cargarContenido('delete.php?id=' + id);

    setTimeout(() =>{
        cargarContenido("read.php");
      }, 1000);
}



























function Preinscribir() {
  var contenedor = document.getElementById("contenido");
  var datos = new FormData();
  datos.append("tTitulo", document.getElementById("tTitulo").value);
  datos.append("tIdentidad", document.getElementById("tIdentidad").value);
  datos.append("tNombres", document.getElementById("tNombres").value);
  datos.append("tApellidos", document.getElementById("tApellidos").value);
  datos.append("RGSexo", document.getElementById("RGSexo").value);
  datos.append("tEdad", document.getElementById("tEdad").value);
  datos.append("tEmail", document.getElementById("tEmail").value);
  datos.append("SDepartamento", document.getElementById("SDepartamento").value);
  datos.append("tProfesion", document.getElementById("tProfesion").value);
  datos.append("sTipo", document.getElementById("sTipo").value);
  datos.append(
    "tNumeroDeposito",
    document.getElementById("tNumeroDeposito").value
  );
  fetch("preinscribir.php", { method: "POST", body: datos })
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}
