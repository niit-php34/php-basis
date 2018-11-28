<?php 
session_start();
if(isset($_SESSION['username'])){
	header('Location:welcome.php');
}
if(isset($_POST['username'])){
	$username= $_POST['username'];
	$pwd = $_POST['pwd'];
	if(isset($_POST['auto_login'])){
		//lưu usernam va password neu nguoi dung check vao checkbox
		setcookie('username',$username,time()+3600);
		setcookie('pwd',$pwd,time()+3600);
	};

	if($username == 'admin' && $pwd=='admin'){
		$_SESSION['username'] = $username;
		header('Location: welcome.php');
	}else{
		echo 'your info is not valid';
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" >
		<div>
			<label>Username</label>
			<input type="text" name="username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" />
		</div>

		<div>
			<label>Password</label>
			<input type="password" name="pwd" value="<?php if(isset($_COOKIE['pwd'])){echo $_COOKIE['pwd'];} ?>"/>
		</div>

		<div>
			<input type="checkbox" name="auto_login">
			<label>Remember Me</label>
		</div>

		<div>
			<input type="submit" name="Submit" value="submit">
		</div>
	</form>
</body>
</html>