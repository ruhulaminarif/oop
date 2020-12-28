<?php 

//class,property,method,object
class person{
	public $name; //public is Access Modifier
	public $age;

	public function personname(){
		echo "Your name: ". $this->name."<br>";

	} //method
	public function personage($value){
		echo "Your Age: ".$this->age=$value;


	}

}

$personinfo = new person;
//echo $personinfo ->name="Arif hossain"; // -> object operator
$personinfo ->name="Arif hossain"; // -> object operator
$personinfo -> personname();

$personinfo ->personage("18");
 ?>
