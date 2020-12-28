<?php 
class person{
	public $name;
	public $age;

	public function __construct($a,$b){
		$this->name = $a;
		$this->age = $b;
	}

	public function personinfo(){
		echo "person name: {$this->name} and person age is: {$this->age}";

	}

}

$per = new person("Ruhul","26");
$per->personinfo();

 ?>
