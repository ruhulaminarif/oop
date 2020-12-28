<?php 
class person{
	const NAME = "Ruhul amin";

	function display(){
		echo "Your name:".person::NAME;

	}
}
$obj=new person;
$obj->display();

 ?>
