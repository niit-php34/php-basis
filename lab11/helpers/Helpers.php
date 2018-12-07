<?php
  class Helpers
  {
    function __construct()
    {
      if (session_status() == PHP_SESSION_NONE) {
       session_start();
       }
       if(isset($_SESSION['flash'])){
         unset($_SESSION['flash']);
       }
    }

    function encryptPwd($pwd){
      return md5(md5($pwd));
    }

    function checkAuth(){
      if(!isset($_SESSION['user']) || $_SESSION['user']==null){
        return false;
      }
      return true;
    }

    function setUserSession($user){
      $_SESSION['user'] = $user;
    }

    function getUserSession(){
      if($this->checkAuth()){
       return $_SESSION['user'];
      }
    }

    function removeUserSession(){
      if($this->checkAuth()){
          unset($_SESSION['user']);
      }
    }

    function redirect($url){
      header("Location: ".$url);
    }

    function setFlashData($key,$val){
      $_SESSION['flash'][$key]=$val;
    }

    function getFlashData($key){
      return $_SESSION['flash'][$key];
    }

    function isFlashData($key){
      if(!isset($_SESSION['flash'][$key]) || $_SESSION['flash'][$key]==null){
        return false;
      }
      return true;
    }
  }
?>
