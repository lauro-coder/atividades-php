<!DOCTYPE html>
<html>
<body>

<form method="post">

Número 1:
<input type="number" name="n1"><br><br>

Número 2:
<input type="number" name="n2"><br><br>

<button name="op" value="+">Somar</button>
<button name="op" value="-">Subtrair</button>
<button name="op" value="*">Multiplicar</button>
<button name="op" value="/">Dividir</button>

</form>

<?php

if($_POST){

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

switch($op){

case "+":
$resultado = $n1 + $n2;
break;

case "-":
$resultado = $n1 - $n2;
break;

case "*":
$resultado = $n1 * $n2;
break;

case "/":
$resultado = $n1 / $n2;
break;

}

echo "<h2>Resultado: $resultado</h2>";

}

?>

</body>
</html>