<?php
	class Vehicle{
		
		/*public
		public $plate;
		private
		private $color;
		protect
		protected $type;*/

		private $plate; // this attribute can't be reached outside the class
		private $color; // this attribute can't be reached outside the class
		protected $type = 'Pickup'; // this attribute can be reached outside the class, by its subclasses/child classes

		public function setPlate($plateParamter){
			//maybe it can validated
			$this -> plate = $plateParamter;
		}

		public function getPlate(){
			return $this -> plate;
		}

	}

	class Car extends Vehicle{
		public function showType(){
			echo $this -> type; // accessing a protected attribute, which is possible because it is a subclass/child class
		}
	}

	$vehicle = new Vehicle();
	$vehicle -> setPlate('HIG993'); // accessing the private attribute by its public set/get methods
	echo $vehicle -> getPlate() . '<br/>';

	$car = new Car();
	$car -> showType();

?>