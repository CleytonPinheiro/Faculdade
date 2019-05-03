<?php

include '../Carro.php';

$motor = filter_input(INPUT_POST, "motor");
$modelo = filter_input (INPUT_POST, "modelo");
$cor = filter_input(INPUT_POST,"cor");
$marca = filter_input(INPUT_POST,"marca");
$ano = filter_input(INPUT_POST,"ano");
$cambio = filter_input(INPUT_POST,"cambio");

$cilindro = filter_input(INPUT_POST, "cilindro");
$potencia = filter_input(INPUT_POST, "potencia");
$giroAtual = filter_input(INPUT_POST, "giroAtual");
$combustivel = filter_input(INPUT_POST, "combustivel");

$objcarro = new Carro();
$objcarro -> imprimeCarro($motor, $modelo, $cor, $marca, $ano, $cambio);

$objcarro -> imprimeMotor($cilindro, $potencia, $giroAtual, $combustivel);


?>