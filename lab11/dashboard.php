<?php
   require_once 'dals/Users.php';
   require_once 'helpers/Helpers.php';
   $helpers = new Helpers();
   if(isset($_GET['action'])){
     switch ($_GET['action']) {
       case 'logout':
         $helpers->removeUserSession();
         $helpers->redirect('login.php');
         break;

       default:
         break;
     }
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require('commons/header.php'); ?>
  <?php require('commons/nav.php'); ?>
  <body>

  </body>
</html>
