<?php 
class person{
	public $name;
	public $age;
	public $id;

	public function __construct($a,$b){
		$this->name=$a;
		$this->age=$b;
	}

	public function setid($d){
		$this->id=$d;
	}
	public function __destruct(){
		if (! empty($this->id)) {
			echo "Saving Person";
		}
	}

}
$personinfo = new person("Ruhul",26);
$personinfo->setid(12);
unset($personinfo);


 ?>
