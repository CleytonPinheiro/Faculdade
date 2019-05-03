	<?php

	  abstract class pessoa {
	 	 public $codigo ;
	 	 public $nome;
	 	 private $dataNascimento;


	    //Método construtor
	 	 public function __construct($codigo, $nome, $dataNascimento){
	 	 	$this->setCodigo($codigo);
	 	 	$this->setNome($nome);
	 	 	$this->setDataNascimento($dataNascimento);
	 	 	}

	 	 //Sets

	public function setNome ($nome){
	 	$this -> nome = $nome;
	 }
	 public function setCodigo($codigo){
	 	$this-> codigo = $codigo;
	 }
	 public function setDataNascimento($dataNascimento){
	 	$this-> dataNascimento = $dataNascimento;
	 }
	  
	 //Gets 
	 public function getNome(){
	 	return $this->nome;
	 }
	 public function getCodigo(){
	 	return $this->codigo;
	 }
	 public function getDataNascimento(){
	 return $this->dataNascimento;
	 }
	//Método imprimir

	 abstract public function imprimir ();


	}
	 	
	?>