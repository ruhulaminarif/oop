<?php 
class person{
	public static $age=25;

	public static function  display(){
		echo "This age: ".self::$age; //(:: scope resolution operator)

	}


}
person::display();


 ?>

