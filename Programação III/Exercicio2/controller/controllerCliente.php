<?php
include'../pessoa.php';
include '../cliente.php';


$codigo = filter_input(INPUT_POST, "codigo");
$nome = filter_input(INPUT_POST, "nome");
$dataNascimento = filter_input(INPUT_POST, "dataNascimento");
$preferencia = filter_input(INPUT_POST, "preferencia");


$objcliente = new cliente($codigo, $nome, $dataNascimento, $preferencia);

$objcliente-> imprimir();


?>