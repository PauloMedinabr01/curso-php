<?php

if (3 == 3) {
    echo "Comparação verdadeira 1 <br>";
}

if (3 == 4) {
    echo "Comparação verdadeira 2 <br>";
} else {
    echo "Comparação falsa 2 <br>";
}

$a = 12;
$b = 12;
$c = 100;

if ($a == $b) {
    echo "Comparação verdadeira 3 <br>";
}

if ($a == $c) {
    echo "Comparação verdadeira 4 <br>";
} else {
    echo "Comparação falsa 4 <br>";
}

$nome = "Paulo";
$nomeDoSistema = "Paulo";

if ($nome == $nomeDoSistema) {
    echo "O nome coincide 5 <br>";
} else {
    echo "O nome não coincide 5 <br>";
}

if ($nome = $nomeDoSistema) { // operador de atribuição
    echo "O nome coincide 6 <br>";
}


