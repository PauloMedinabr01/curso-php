<?php

echo null;

$nome = null; // variável inicializada como nulo

echo $nome; // não exibe nada

if (is_null($nome)) { // checando se o valor da variável é nulo
    echo "O valor é nulo.";
}
