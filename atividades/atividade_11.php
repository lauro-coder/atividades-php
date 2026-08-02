<!DOCTYPE html>
<html>
<body>

<form method="post">

Peso:
<input type="number" name="peso" step="0.1"><br><br>

Altura:
<input type="number" name="altura" step="0.01"><br><br>

<input type="submit" value="Calcular">

</form>

<?php

if($_POST){

$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);

echo "<h2>Seu IMC é: ".number_format($imc,2)."</h2>";

}

?>

</body>
</html>