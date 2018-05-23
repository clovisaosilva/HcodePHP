<?php

	abstract class Animal{
		public function falar(){
			return "Som";
		}

		public function mover(){
			return "Anda";
		}
	}
	
	class Cachorro extends Animal{
		public function falar(){
			return "Late";
		}
	}

	class Gato extends Animal{
		public function falar(){
			return "Mia";
		}
	}

	class Passaro extends Animal{
		public function falar(){
			return "Canta";
		}
		public function mover(){
			return "Voa e ". parent::mover();
		}
	}

	$pluto = new Cachorro();
	echo $pluto->falar();
	echo "<br/>";
	echo $pluto->mover();

	echo "<br/>_________<br/>";

	$garfield = new Gato();
	echo $garfield->falar();
	echo "<br/>";
	echo $garfield->mover();

	echo "<br/>_________<br/>";

	$frajola = new Passaro();
	echo $frajola->falar();
	echo "<br/>";
	echo $frajola->mover();
?>
