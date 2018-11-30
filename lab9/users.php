<?php

class Users
{
	public $connector;
	public function __construct()
	{
		$this->connector = mysqli_connect('localhost', 'root', 'koodinh', 'learning');
	}

	public function getConnection()
	{
		return $this->connector;
	}

	public function update($id, $address, $phone)
	{
		$sql = 'UPDATE users SET address="'.$address.'",phone="'.$phone.'" WHERE id='.$id;
		$check=mysqli_query($this->getConnection(), $sql) or die(mysqli_error());
		return $check;
	}

	public function login($username, $pwd)
	{
		$sql = 'SELECT * FROM users WHERE user_name="'.$username.'" AND pwd="'.$pwd.'"';
		$result=mysqli_query($this->getConnection(), $sql) or die(mysqli_error($this->getConnection()));
		if (mysqli_num_rows($result)>0) {
			$user = mysqli_fetch_assoc($result);
			$_SESSION['user']=$user;
			return $user;
		}
		return null;
	}

	public static function logout($redirect_url='login.php')
	{
		if (isset($_SESSION['user'])) {
			unset($_SESSION['user']);
		}
		header('Location:'.$redirect_url);
	}

	public static function auth($redirect_url='login.php'){
		//kiem tra xem user da dang nhap hay chua
		if(!isset($_SESSION['user']) || $_SESSION['user']==null){
			header('Location:'.$redirect_url);
		}
	}

	public static function getLogedUser(){
		return isset($_SESSION['user'])?$_SESSION['user']:null;
	}

	public function update_session_user($id){
		$sql = 'SELECT * FROM users WHERE id='.$id;
		$result=mysqli_query($this->getConnection(), $sql) or die(mysqli_error($this->getConnection()));
		if (mysqli_num_rows($result)>0) {
			$user = mysqli_fetch_assoc($result);
			$_SESSION['user']=$user;
			return $user;
		}
		return null;
	}
}
