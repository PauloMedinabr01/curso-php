<?php

function teste()
{

    $a = 0;
    $a++; // ++ operador de atribuição - soma mais 1

    echo "$a <br>"; // valor não persiste em chamadas de função de escopo local
}

teste();
teste();
teste();

function testeStatic()
{

    static $a = 0; // valor persiste em função de escopo local e valor é mantido em chamadas de função
    $a++;

    echo "$a <br>"; // valor persiste em função de escopo local
}


testeStatic();
testeStatic();
testeStatic();
