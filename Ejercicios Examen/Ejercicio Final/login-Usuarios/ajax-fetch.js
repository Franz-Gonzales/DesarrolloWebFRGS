function autenticar() {
	
	ajax = nuevoAjax();
	ajax.open("POST", "autenticar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			ingreso = document.getElementById('ingreso');
			ingreso.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	// ajax.send(cadena);
}