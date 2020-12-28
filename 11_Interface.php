<?php 
interface school{
	public function myschool();
}
interface college{
	public function mycollege();
}
interface versity{
	public function myversity();
}

class teacher implements school,college,versity{
	public function __construct(){
		$this->myschool();
		$this->mycollege();
		$this->myversity();
	}


	public function myschool(){
		echo "I am school student <br>";
	}
	public function mycollege(){
		echo "I am college student <br>";
	}
	public function myversity(){
		echo "I am versity student";
	}
}

$teacher = new teacher();

 ?>
