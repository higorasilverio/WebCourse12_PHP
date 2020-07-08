<?php
	class Person{
		private $name;
		public function run(){
			echo $this -> name . ' is running. <br/>';
		}
		function __construct($nameParameter){
			echo 'Constructor created! <br/>';
			$this -> name = $nameParameter;
		}
		function __destruct(){
			echo 'Object removed!';
		}
	}
	$person = new Person('Higor');
	$person -> run();
?>