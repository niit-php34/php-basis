<?php 
session_start();
if(isset($_SESSION['username'])){
	//echo $_SESSION['username'];

	//xoa mot bien session
	unset($_SESSION['username']);

	//xoa het bien session
	session_unset();

	//huy toan bo session
	session_destroy();
}
?>