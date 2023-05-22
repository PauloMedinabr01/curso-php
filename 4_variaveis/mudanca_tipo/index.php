<?php

echo 5 / 2;
echo "<br>";

if (is_float(5 / 2)) {
    echo "É float <br>";
} else {
    echo "Não é float <br>";
}

echo 2 . 3;
echo "<br>";
if (is_string(2 . 3)) {
    echo "É string <br>";
} else {
    echo "Não é string <br>";
}

$nome = "Paulo";
$sobreNome = "Medina";

$nomeCompleto = $nome . " " . $sobreNome;

echo "$nomeCompleto <br>";