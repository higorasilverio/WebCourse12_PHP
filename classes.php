<?php
	class Person{
		//attributes
		var $name;
		//methods
		function setName($definedName){
			$this -> name = $definedName;
		}
		function getName(){
			return $this -> name;
		}
	}
	$person = new Person();
	$person->setName('Higor');
	echo $person->getName();
?>