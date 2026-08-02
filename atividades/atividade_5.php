<?php

$numeros = [4, 7, 12];

foreach ($numeros as $numero) {

    echo "<h3>Tabuada do $numero</h3>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }

    echo "<br>";
}

?>