<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('Location: login.php');
}else{
	$username =$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Hello<?php echo $username; ?></p>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>