<?php


if (isset($_POST['convertir'])) {
    $cantidad = floatval($_POST['cantidad']);
    $unidad = $_POST['unidad'];
    $unidad_destino = $_POST['unidad_destino'];

    $conversion = 0;

    if ($unidad == $unidad_destino) 
    {
        $conversion = $cantidad;

    } elseif ($unidad == 'milimetro' && $unidad_destino == 'centimetro') 
    {
        $conversion = $cantidad / 10;

    } elseif ($unidad == 'milimetro' && $unidad_destino == 'decimetro') 
    {
        $conversion = $cantidad / 100;

    } elseif ($unidad == 'milimetro' && $unidad_destino == 'metro') 
    {
        $conversion = $cantidad / 1000;

    } elseif ($unidad == 'milimetro' && $unidad_destino == 'kilometro') 
    {
        $conversion = $cantidad / 1000000;

    } else
    


    
    if ($unidad == 'centimetro' && $unidad_destino == 'milimetro') 
    {
        $conversion = $cantidad * 10;

    } elseif ($unidad == 'centimetro' && $unidad_destino == 'decimetro') 
    {
        $conversion = $cantidad / 10;

    } elseif ($unidad == 'centimetro' && $unidad_destino == 'metro') 
    {
        $conversion = $cantidad / 100;

    } elseif ($unidad == 'centimetro' && $unidad_destino == 'kilometro') 
    {
        $conversion = $cantidad / 100000;

    } else
    
    
    
    
    if ($unidad == 'decimetro' && $unidad_destino == 'milimetro') 
    {
        $conversion = $cantidad * 100;

    } elseif ($unidad == 'decimetro' && $unidad_destino == 'centimetro') 
    {
        $conversion = $cantidad * 10;

    } elseif ($unidad == 'decimetro' && $unidad_destino == 'metro') 
    {
        $conversion = $cantidad / 10;

    } elseif ($unidad == 'decimetro' && $unidad_destino == 'kilometro') 
    {
        $conversion = $cantidad / 10000;

    } else
    
    
    
    
    if ($unidad == 'metro' && $unidad_destino == 'milimetro') 
    {
        $conversion = $cantidad * 1000;

    } elseif ($unidad == 'metro' && $unidad_destino == 'centimetro') 
    {
        $conversion = $cantidad * 100;

    } elseif ($unidad == 'metro' && $unidad_destino == 'decimetro') 
    {
        $conversion = $cantidad * 10;

    } elseif ($unidad == 'metro' && $unidad_destino == 'kilometro') 
    {
        $conversion = $cantidad / 1000;

    } else
    
    
    
    if ($unidad == 'kilometro' && $unidad_destino == 'milimetro') 
    {
        $conversion = $cantidad * 1000000;

    } elseif ($unidad == 'kilometro' && $unidad_destino == 'centimetro') 
    {
        $conversion = $cantidad * 100000;

    } elseif ($unidad == 'kilometro' && $unidad_destino == 'decimetro') 
    {
        $conversion = $cantidad * 10000;

    } elseif ($unidad == 'kilometro' && $unidad_destino == 'metro') 
    {
        $conversion = $cantidad * 1000;
    }

    echo "<h2>El número introducido es: $cantidad</h2>";
    echo "<h2>Resultado: $cantidad $unidad equivale a: $conversion $unidad_destino</h2>";
}
?>
