<?php

// true
if (5 > 2) {
    echo "Deu certo! Entrou no if 1, porque é true. <br>";
}

// false
if (2 >= 5) {
    echo "Não vai entrar no if 2, porque deu false. <br>";
}

// utilizar operador lógico
if (10 === 10 && 9 > 3) {
    echo "Deu certo! Entrou no if 3, porque é true. <br>";
}

// utilizando variáveis
$a = 10;
$b = 5;
$c = "Deu certo, entrou no if 4. <br>";

if ($a >= $b) {
    echo $c;
}