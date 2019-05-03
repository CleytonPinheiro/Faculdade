<?php

 class Carro{
	// Vaviáveis
    public $motor, $modelo, $cor, $marca,$ano,$cambio;

    // Métodos gets e sets

	public function setMotor($motor){
	$this-> motor = $motor;
	}		
	public function setModelo($modelo){
	$this-> modelo = $modelo;
	}		
	public function setCor($cor){
	$this-> cor = $cor;
	}
	public function setMarca($marca){
	$this -> marca = $marca;
	}
	public function setAno($ano){
	$this -> ano = $ano;
	}
	public function setCambio($cambio){
	$this ->  cambio = $cambio;
	}
							

	 public function setCilindro ($cilindro){
	 $this -> cilindro = $cilindro;
	 }	
	 public function setPotencia ($potencia){
	 $this -> potencia = $potencia;
	 }
	 public function setGiroAtual ($giroAtual){
	  $this -> giroatual = $giroAtual;
	  }
	  public function setCombustivel ($combustivel){
	  	$this -> combustivel = ($combustivel);
	  }

	  //Gets

	public function getCor(){
	return $this -> cor;
	}
	public function getMotor(){
	return $this -> motor;
	}
	public function getModelo(){
	return $this -> modelo;
	}
	public function getMarca(){
	return $this -> marca;
	}
	public function getAno(){
	return $this -> ano;
	}
	public function getCambio(){
	return $this -> cambio;
    }

	  public function getCilindro (){
	  	return $this -> cilindro;
	  }
	  public function getPotencia (){
	  	return $this -> potencia;
	  }
	  public function getGiroAtual(){
	  	return $this -> giroatual;
	  }
	  public function getCombustivel(){
	  	return $this -> combustivel;
	  }


								 
// Método de impressão
	public function imprimeCarro ($motor,$modelo,$cor,$marca,$ano,$cambio){
	$this-> setMotor ($motor);
	$this-> setModelo ($modelo);
	$this-> setCor ($cor);
	$this-> setMarca ($marca);
	$this-> setAno ($ano);
	$this-> setCambio ($cambio);

	echo "<br>Motor: " . $this->getMotor();
	echo "<br>Modelo: " . $this->getModelo();
	echo "<br>Cor: " . $this->getCor();
	echo "<br>Marca: " . $this->getMarca();
	echo "<br>Ano: " . $this->getAno();
	echo "<br>Cambio: " . $this->getCambio();
}
	public function imprimeMotor ($cilindro,$potencia, $giroAtual,$combustivel){
		$this -> setCilindro ($cilindro);
		$this -> setPotencia ($potencia);
		$this -> setGiroAtual ($giroAtual);
		$this -> setCombustivel ($combustivel);

		echo "<br>Cilindros: " . $this -> getCilindro();
		echo "<br>Potência: " . $this -> getPotencia();
		echo "<br>Giro Atual: " . $this -> getGiroAtual();
		echo "<br>Combusível: " . $this -> getCombustivel();
	}

}




?>