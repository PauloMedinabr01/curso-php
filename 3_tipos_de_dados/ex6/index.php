<?php

$arr_carro = ['Carro' => 'Sedan', 'Cor' => 'Azul', 'Motor' => 1.4];

print_r($arr_carro);
echo "<br>";

echo $arr_carro['Carro'];
echo "<br>";

echo $arr_carro['Cor'];
echo "<br>";

echo $arr_carro['Motor'];
echo "<br>";

$veiculo = $arr_carro['Carro'];
$potencia = $arr_carro['Motor'];

echo "Meu carro é um $veiculo com o motor $potencia.";
