<?php 
class person{
	public $user;
	public $userid;

	public function __construct($a,$b){
		$this->user=$a;
		$this->userid=$b;

	}
	public function display(){
		echo "User Name is: {$this->user} <br> User ID: {$this->userid}";
	}


	}

	class admin extends person{
		public $lavel;
		public function display(){
		echo "User Name is: {$this->user} <br> User ID: {$this->userid} <br> User Lavel: {$this->lavel} ";
	}

	}

$x="Arif";
$y="25";

$obj = new person($x,$y);
$obj->display();

echo "<br>";

$x="Ruhul";
$y="2";

$obj2= new admin($x,$y);
$obj2->lavel="Administor";
$obj2->display();

 ?>