<?php 
 /**
  * 
  */
 class Users
 { 	
 	var $connector;
 	function __construct()
 	{
 		$this->connector = mysqli_connect('localhost','root', 'koodinh','learning');
 	}

 	function getConnection(){
 		return $this->connector;
 	}

 	function update($id,$address,$phone){
 		$sql = 'UPDATE users SET address="'.$address.'",phone="'.$phone.'" WHERE id='.$id;
 		$check=mysqli_query($this->getConnection(),$sql);
 		return $check;
 	}

 	function login($username,$pwd){
 		$sql = 'SELECT * FROM users WHERE user_name='.$username.' AND pwd='.$pwd;
 		$result=mysqli_query($this->getConnection(),$sql);
 		if(mysqli_num_row($result)>0){
 			$user = mysqli_fetch_assoc($result);
 			$_SESSION['user']=$user;
 			return $user;
 		}
 		return null;
 	}

 	function logout($redirect_url){
 		if(isset($_SESSION['user'])){
 			unset($_SESSION['user']);
 		}
 		header('Location:'.$redirect_url);
 	}
 }
 ?>