<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .containerAjedrez{
    display: flex;
    }
    .containerPiezaBlanca{
    background-color: white; 
    border: 2px solid black; 
    display: flex;
    height: 50px;
    width: 50px;
    }
    .containerPiezaColor{
    border: 2px solid black; 
    display: flex;
    height: 50px;
    width: 50px;
    }

</style>
</head>
<body>
    <?php
    $filas=$_GET["fila"];
    $columnas=$_GET["columna"];
    $color=$_GET["color"];

    echo $color;
    ?>


<div>
        <?php
            for($i=0;$i< $filas; $i++ ){?>

                <div class="containerAjedrez">
                    <?php
                        for($j=0;$j< $columnas; $j++ ){?>
                        <?php
                        
                        if(($j+$i)%2 == 0){?>

                            <div class ="containerPiezaBlanca"></div>

                        <?php }
                        
                        else{
                            ?> 
                            <div class ="containerPiezaColor" style="background-color: <?php echo $color?>"></div>
                            <?php 
                        }
                        ?>
                       
                        <?php }

                    ?>
                </div>
            <?php }
    ?>
    </div>
</body>
</html>