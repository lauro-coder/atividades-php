<?php
$numero1 = 20;
$numero2 = 5;
$operacao = "*";

if ($operacao == "+") {
    echo $numero1 + $numero2;
} elseif ($operacao == "-") {
    echo $numero1 - $numero2;
} elseif ($operacao == "*") {
    echo $numero1 * $numero2;
} elseif ($operacao == "/") {
    echo $numero1 / $numero2;
} else {
    echo "Operação inválida";
}
?>