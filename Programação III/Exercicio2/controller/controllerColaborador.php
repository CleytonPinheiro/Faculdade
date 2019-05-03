<?php
	include'../pessoa.php';
	include'../colaborador.php';

	$codigo = filter_input(INPUT_POST, "codigo");
	$nome = filter_input(INPUT_POST, "nome");
	$dataNascimento = filter_input(INPUT_POST, "dataNascimento");
	$setor = filter_input(INPUT_POST, "setor");
	$dataAdmissao = filter_input(INPUT_POST, "dataAdmissao");
	$salario = filter_input(INPUT_POST, "salario");

$colaborador1 = new colaborador($codigo, $nome, $dataNascimento,$setor,$dataAdmissao,$salario);

$colaborador1-> imprimir();


?>