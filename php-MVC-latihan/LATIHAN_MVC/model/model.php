<?php  
class Model{
	//attribute
	private $username;
	private $password;

	//constructor
	public function __construct(){		
		$this->username = "admin";
		$this->password = "123";
	}

	//method	
	public function setPassword($password){
		$this->password = $password;
	}

	public function getLogin($uname,$pass){
		if($uname == $this->username and $pass == $this->password){
			return "Sukses";
		} else {
			return "Gagal Login";
		}
	}
}


?> 
