<?php
$dinheiro = 15000;

if ($dinheiro < 1000) {
    echo "Pobre";
} elseif ($dinheiro < 5000) {
    echo "Classe Média";
} elseif ($dinheiro < 20000) {
    echo "Riquinho";
} elseif ($dinheiro < 1000000) {
    echo "Ricão";
} else {
    echo "Elon Musk";
}
?>