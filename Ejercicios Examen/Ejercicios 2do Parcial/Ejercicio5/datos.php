
    <?php
    include('conexion.php');  
    
    $sql_libros = "SELECT id, imagen, titulo, autor  FROM libros";
    $result_libros = $connect->query($sql_libros);

    $libros = array();
    if($result_libros->num_rows > 0){
        while($row = $result_libros->fetch_assoc()){
            $libros[] = $row;
        }
    }
    
    echo json_encode($libros, JSON_UNESCAPED_UNICODE);

    ?>