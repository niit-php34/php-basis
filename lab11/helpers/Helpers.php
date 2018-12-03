<?php
  class Helpers
  {
    function __construct()
    {

    }

    function encryptPwd($pwd){
      return md5(md5($pwd));
    }

    function checkLogin(){
      if(!isset($_SESSION['user']) || $_SESSION['user']==null){
        return false;
      }
      return true;
    }
  }
?>
