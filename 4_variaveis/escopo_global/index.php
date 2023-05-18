<?php

$teste = "asd"; // variável global
echo "$teste global 1 <br>"; // imprime a variável global

if (5 > 2) {
    $teste = "dsa"; // variável local
    echo "$teste if <br>"; // imprime a variável local
}

echo "$teste global 2 <br>"; // imprime a variável global 2

function testarLocal()
{

    echo "$teste local <br>"; // variável testarLocal não foi definida / não pode ser acessada fora da função
}

testarLocal();

function testarGlobal()
{
    $teste = "variável_local";
    echo "$teste <br>"; // variável testarGlobal não foi definida / não pode ser acessada fora da função
}

testarGlobal();

function chamarGlobal()
{
    global $teste; // instrução global chama variaveis de escopo global dentro da função
    echo "$teste instrução (global) <br>"; // variável chamarGlobal não foi definida / não pode ser acessada fora da função
}

chamarGlobal();
