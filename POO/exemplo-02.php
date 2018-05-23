<?php

	class Carro{
		private $modelo;
		private $motor;
		private $ano;

		/*Get e Set Modelo*/
		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		/*
			Get e Set Motor
			:float - faz um cast do valor de retorno.
		*/
		public function getMotor():float{
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		/*
			Get e Set Ano
			:int - faz um cast do valor de retorno.
		*/
		public function getAno():int{
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibir(){
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}

	$gol = new Carro();
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6");
	$gol->setAno("2017");

	var_dump($gol->exibir());

?>