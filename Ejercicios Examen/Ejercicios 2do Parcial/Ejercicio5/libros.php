<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../ajax.js"></script>
</head>
<body>

    <div class="contenedor">
        <h1>Fotos de Libros</h1>
        <select name="libros" id="libros" onchange="mostrarFotosLibros()">
            <option value="">Seleccione un Libro</option>
        </select>

        <div class="fotos-libros" id="fotos-libros"></div>
    </div>
    <script src="../ajax.js"></script>
</body>
</html>