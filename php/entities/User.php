<?php
class User{
	private $user_id;
	private $name;
	private $email;
	private $date_created;
	private $password;
	private $role;

	public function constructWithUserId($user_id){
		$this->user_id = $user_id;
		$constructQueryOfUsers = mysql_query("SELECT * FROM users WHERE user_id = '$user_id'");
		while($constructRowOfUsers = mysql_fetch_array($constructQueryOfUsers)){
			$this->name = $constructRowOfUsers['name'];
			$this->email = $constructRowOfUsers['email'];
			$this->date_created = $constructRowOfUsers['date_created'];
			$this->password = $constructRowOfUsers['password'];
			$this->role = $constructRowOfUsers['role'];
		}
	}

	public function constructWithEmail($email){
		$this->email = $email;
		$constructQueryOfUsers = mysql_query("SELECT * FROM users WHERE email = '$email'");
		while($constructRowOfUsers = mysql_fetch_array($constructQueryOfUsers)){
			$this->user_id = $constructRowOfUsers['user_id'];
			$this->name = $constructRowOfUsers['name'];
			$this->date_created = $constructRowOfUsers['date_created'];
			$this->password = $constructRowOfUsers['password'];
			$this->role = $constructRowOfUsers['role'];
		}
	}

	public function login(){
		$_SESSION['logged_in_user'] = $this->user_id;
	}

	public function isCorrectPassword($password){
		include '../functions/passwordfunctions.php';
		return $this->password == cryptPassword($password);
	}

	public function isUserExcisting(){
		return $this->name != null;
	}	

	public function getUser_id(){
		return $this->user_id;
	}

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}
	public function getDate_created(){
		return $this->date_created;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getRole(){
		return $this->role;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPassword($password){
		$this->password = crypt($password);
	}

	public function saveInDB(){
		mysql_query("INSERT INTO users VALUES('','$this->name', '$this->email', '$this->date_created', '$this->password', '$this->role')");
	}
}




?>