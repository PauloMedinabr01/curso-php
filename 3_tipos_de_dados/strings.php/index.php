<?php

echo 'testo com aspas simples <br>';
echo "testo com aspas duplas <br>";
echo "Ele disse: 'Olá!' <br>";
// echo "Ele disse: "Olá!" <br>";

$idade = 15;
echo "<br>";

echo "Ele tem $idade anos <br>"; // imprime a variável somente quando a strig utiliza aspas duplas
echo 'Ele tem $idade anos <br>'; // não imprime a variável quando a string utiliza aspas simples
