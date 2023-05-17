<?php

class Pessoa
{
    function falar()
    {
        echo "Olá pessoal!";
    }
}

$paulo = new Pessoa;

$paulo->nome = "Paulo";

echo $paulo->nome;
echo "<br>";

$paulo->falar();
