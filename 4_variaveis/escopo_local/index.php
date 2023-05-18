<?php

$x = 10;

echo "$x global_1 <br>"; // variavel de escopo global

function teste() // função
{

    $x = 5;
    echo "$x local_1 <br>"; // variavel de escopo local
}

teste(); // chamada de função

function testando()
{ // função


    $x = 12;
    echo "$x local_2 <br>"; // variavel de escopo local
}

$x = 99; // variavel de escopo global

testando(); // chamada de função

teste(); // chamada de função

echo "$x global_2 <br>";
