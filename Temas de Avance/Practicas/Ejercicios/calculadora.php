<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Calculadora</h1>
    <div>
        <h1>Calculadora</h1>
        <form action="calculadora.php" method="post">
            <label for="a">A</label>
            <input type="text" name="a" id="a">
            <br>
            <label for="b">B</label>
            <input type="text" name="b" id="b">
            <br>
            <input type="submit" value="Calcular">
        </form>
    </div>
    <?php

$a = $_POST['a'];
$b = $_POST['b'];

class Calculadora{
    public $a;
    public $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function sumar(){
        return $this->a + $this->b;
    }

    public function restar(){
        return $this->a - $this->b;
    }

    public function multiplicar(){
        return $this->a * $this->b;
    }

    public function dividir(){
        return $this->a / $this->b;
    }

    public function __toString(){
        return $this->a . " + " . $this->b . " = " . $this->sumar() . "\n" .
        $this->a . " - " . $this->b . " = " . $this->restar() . "\n" .
        $this->a . " * " . $this->b . " = " . $this->multiplicar() . "\n" .
        $this->a . " / " . $this->b . " = " . $this->dividir() . "\n";
        
    }

}

$calculadora1 = new Calculadora($a, $b);
echo "<h2>" . $calculadora1->__toString();


echo "El resulado de la suma es: ".$calculadora1->sumar().'<br>';

echo "El resulado de la resta es: ".$calculadora1->restar().'<br>';

echo "El resulado de la multiplicacion es: ".$calculadora1->multiplicar().'<br>';

echo "El resulado de la division es: ".$calculadora1->dividir();


?>
</body>

</html>