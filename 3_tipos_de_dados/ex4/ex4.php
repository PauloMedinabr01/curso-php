<?php

$a = 123.5;
$b = 12.8;
$c = 6565.3;
$d = -1258.2;

echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";
echo "d = $d <br>";

echo "<br>";

if (is_float($a)) {
    echo " Aplicando a função is_float a variável a: é float <br>";
} else {
    echo " Aplicando a função is_float a variável a: não é float <br>";
}

if (is_float($b)) {
    echo " Aplicando a função is_float a variável b: é float <br>";
} else {
    echo " Aplicando a função is_float a variável b: não é float <br>";
}

if (is_float($c)) {
    echo " Aplicando a função is_float a variável c: é float <br>";
} else {
    echo " Aplicando a função is_float a variável c: não é float <br>";
}

if (is_float($d)) {
    echo " Podemos ter um número float negativo! <br>";
}
