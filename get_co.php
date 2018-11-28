<?php
echo $_COOKIE['hi'];
//$_COOKIE['hi']='lala';
setcookie('hi','abc');
echo $_COOKIE['hi'];
//unset($_COOKIE['hi']);
?>