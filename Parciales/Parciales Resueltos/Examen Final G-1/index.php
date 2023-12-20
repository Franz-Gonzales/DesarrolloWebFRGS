<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Final</title>
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js"></script>
</head>
<body>

    <div class="container">

        <div class="principal">

        <!-- Menu de opciones  -->
            <div class="container-opciones">
                <div class="opciones">
                    <img src="./images/usfx.png" alt="usfx">
                    <div class="opcion" id="opcion">
                        Opciones
                    </div>
                </div>
                <div class="sub-menu" id="sub-menu">
                        
                        <!-- <a href="javascript:"></div></a> -->
                    <div class="detalle">Detalle 1</div>
                    <div class="detalle">Detalle 2</div>
                </div>
            </div>
            
            
            <div class="navigation">

                <div class="menu" id="menu">
                    <div class="botenes">
                        <a href=""><button class="btn">Pregunta 1</button></a>
                    </div>
                    <div class="botenes">
                        <a href="javascript:cargarOperaciones('operaciones.html')"><button class="btn">Pregunta 2</button></a>
                    </div>
                    <div class="botenes">
                        <a href="javascript:cargarContenido3('pregunta3.php')"><button class="btn">Pregunta 3</button></a>
                    </div>
                    <div class="botenes">
                        <a href="javascript:pregunta4('pregunta4.html')"><button class="btn">Pregunta 4</button></a>
                    </div>
                    <div class="botenes  btn_5">
                        <a href="javascript:cargarContenido5('pregunta5.html')"><button class="btn btn5">Pregunta 5</button></a>
                    </div>
                </div>

                <div class="titulo" id="titulo">
                    Pregunta 1
                </div>

                <div class="contenido" id="contenido">

                    <div class="card-container">
                        <div class="title">
                            <h2>SIS 256 Programación web</h2>
                            <p>Examen Final - 02-12-2023 7:00 am</p>
                        </div>
                        <div class="perfil">
                            <img src="./images/yo.jpg" alt="">
                        </div>
                        <div class="datos">
                            <h2>Gonzales Suyo Franz Reinaldo</h2>
                            <p>Carrera: Ingeniería de Sistemas</p>
                            <p>Repositorio Examen</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Pie de pagina -->
        <div class="pie" id="pie">
            Sucre – Semestre 2-2023
        </div>
    </div>
</body>
</html> 
