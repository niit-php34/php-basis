<?php
session_start();
require 'Users.php';
//authentication
Users::auth();
$user = Users::getLogedUser();
//var_dump($_SESSION['user']);
if(isset($_POST['address']) && isset($_POST['phone'])){
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$id=$_POST['id'];
	$update_user = new Users();
	$update_user->update($id,$address,$phone);
	$update_user->update_session_user($id);
	header('Location:profile.php');
}
if(isset($_GET['action']) && $_GET['action']=='logout'){
	Users::logout();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Hello <?php echo $user['user_name']; ?></p><a href="?action=logout">Logout</a>
	<form method="POST">
		<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
		<input type="text" name="address" value="<?php echo $user['address'] ?>" />
		<input type="text" name="phone" value="<?php echo $user['phone']; ?>" />
		<input type="submit" name="submit" value="submit"/>
	</form>
</body>
</html>