<?php
	//mother class or superclass
	class Feline{
		var $mammal = 'Yes <br/>';
		function run(){
			echo 'Run as a feline <br/>';
		}
	}
	//child class or subclass
	class Cheetah extends Feline{
		//polymorphism
		function run(){
			echo 'Run as a cheeta (100 km/h) <br/>';
		}
	}
	$cheetah = new Cheetah();
	echo $cheetah -> mammal;
	$cheetah->run();
?>