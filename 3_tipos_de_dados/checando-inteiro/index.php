<?php

//true
if (is_int(5)) {
    echo "É um numero inteiro <br>";
} else echo "Não é um número inteiro <br>";

echo "<br>";

// false
if (is_int("Olá")) {
    echo "É um numero inteiro <br>";
} else echo "Não é um número inteiro <br>";

echo "<br>";

$a = 10;

//true
if (is_int($a)) {
    echo "É um numero inteiro <br>";
} else echo "Não é um número inteiro <br>";
