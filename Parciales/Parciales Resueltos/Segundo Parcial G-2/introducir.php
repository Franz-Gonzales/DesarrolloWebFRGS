<?php

$numero = $_POST['numero'];

// echo $numero;

for($i = 1; $i <= $numero; $i++){ ?>

    <input type="number" class="numeros" onchange="calcularSuma()" name="numeros" id="numero<?php $i ?>">

<?php } ?>

<div class="hr"></div>
<div class="suma" id="suma">

</div>

