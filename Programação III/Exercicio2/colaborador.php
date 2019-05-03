	<?php
	  class colaborador extends pessoa {

	 public $setor;
	 private $dataAdmissao;
	 protected $salario;

	 //Sets

	 public function setSetor ($setor){
	 	$this-> setor = $setor;
	 }
	 public function setDataAdmissao ($dataAdmissao){
	 	$this -> dataAdmissao = $dataAdmissao;
	 }
	 public function setSalario ($salario){
	 	$this -> salario = $salario;
	}
	//Gets
	public function getSetor (){
	 	return $this ->setor;
	 }
	 public function getDataAdmissao (){
	 	return $this ->dataAdmissao;
	 }
	 public function getSalario(){
	 	return $this ->salario;
	}
	//Construtor
	public function __construct ($codigo, $nome, $dataNascimento,$setor,
		$dataAdmissao,$salario){
	parent:: __construct($codigo, $nome, $dataNascimento);
	$this-> setSetor($setor);
	$this-> setDataAdmissao($dataAdmissao);
	$this-> setSalario($salario);

	}
	//Função imprimir
	public function imprimir(){
	echo "<br> Codigo: " . $this->getCodigo();
	echo "<br> Nome: " . $this->getNome();
	echo "<br> Data Nascimento: " . $this->getDataNascimento();
	echo "<br> Setor : " . $this-> getSetor();
	echo "<br> Data Admissão : " . $this-> getDataAdmissao();
	echo "<br> Salário : " . $this-> getSalario();

	}
	}

	?>