<?php 
session_start();
require 'users.php';
if(isset($_SESSION['error'])){
	unset($_SESSION['error']);
}
if(isset($_POST['username']) && isset($_POST['pwd'])){
	$username=$_POST['username'];
	$pwd= $_POST['pwd'];
	$pwd = md5(md5(md5($pwd)));
	//khoi tao user
	$user = new Users();
	$exist=$user->login($username,$pwd);
	if($exist!=null){
		header("Location: profile.php");//user co ton tai trong db
	}else{
		$_SESSION['error']='The user not exist in our record db'; //user ko ton tai trong db 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<div>
			<?php 
			if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
			}
			?>
		</div>
		<div>
			<label>Username</label>
			<input type="text" name="username" value="" />
		</div>

		<div>
			<label>Password</label>
			<input type="password" name="pwd" value=""/>
		</div>

		<div>
			<input type="submit" name="Submit" value="submit">
		</div>
	</form>
</body>
</html>