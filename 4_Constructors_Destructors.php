<form action="" method="POST">
	<input type="text" name="name"><br>
	<input type="text" name="id"><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php 

if (isset($_POST['submit'])) {
	

class UserData{
	public $user;
	public $userId;

	public function __construct($a,$b){
		$this->user=$a;
		$this->userId=$b;

		echo "User Name is: {$this->user} <br> User ID: {$this->userId}";

	}

	public function __destruct(){
		unset($this->user);
		unset($this->userId);

	}
}

$name=$_POST['name'];
$id=$_POST['id'];
$obj=new UserData($name,$id);

}
 ?>
