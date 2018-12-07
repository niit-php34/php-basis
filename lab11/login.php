<?php
   require_once 'dals/Users.php';
   require_once 'helpers/Helpers.php';
   $helpers = new Helpers();
   if($helpers->checkAuth()){
     $helpers->redirect('dashboard.php');
   };

   if(isset($_POST['username'])){
     $user = new Users();
     $username=$_POST['username'];
     $pwd=$_POST['pwd'];
     $row=$user->findByUserNamePwd($username,$helpers->encryptPwd($pwd));
     if(!is_numeric($row)){
       $helpers->setUserSession($row);
       $helpers->redirect('dashboard.php');
     }else{
       $helpers->setFlashData('login_error','Check your info again !!!');
     }
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require('commons/header.php'); ?>
  <body>
    <div  class="login-form">
    <h3>Login to admin</h3>
    <?php  if($helpers->isFlashData('login_error')){
      echo $helpers->getFlashData('login_error');
    }; ?>
    <form method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="username">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="pwd" placeholder="password">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  </body>
</html>
