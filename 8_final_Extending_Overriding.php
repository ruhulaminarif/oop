

<?php 
//when use final in any class or method . then this class and method don't  extends and overriding.
final class person{ //use Final so don't display output
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
		public final function display(){ //use Final so don't display output
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