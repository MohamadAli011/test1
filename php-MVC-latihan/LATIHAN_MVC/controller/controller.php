<?php 
include_once 'model/model.php';
class Controller{
	//attribute
	public $model;
	private $uname;
	private $pass;

	//constructor
	public function __construct(){
		$this->uname = "";
		$this->pass = "";
		$this->model = new Model();
	}

	//method
	public function login(){
		if(isset($_REQUEST['login'])){
			$this->uname = $_REQUEST['uname'];
			$this->pass = $_REQUEST['pass'];
		}
		$hasil = $this->model->getLogin($this->uname,$this->pass);
		if ($hasil == "Sukses"){
			include 'view/dashboard.php';
		} else {
			include 'view/login.php';
		}
	}

}
 ?>
