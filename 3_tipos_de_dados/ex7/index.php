<?php

// cria um array associativo
$pessoa = [
    'Nome' => 'Paulo',
    'Idade' => 40,
    'Cidade' => 'São Paulo'
];

$anos = $pessoa['Idade']; // pega a idade da pessoa
$maior = 18; // define a idade minima para entrada

// desafio - checar a maioridade de uma pessoa
if ($pessoa['Idade'] >= $maior) { // verifica se a idade da pessoa é maior que 18 anos
    echo "Pode entrar, você tem $anos anos e é maior de idade.";
} else {
    echo "Você não pode entrar, você não é maior de idade e tem somente $anos anos.";
}
