<?php
 require 'DB.php';
 class Users
 {
   const TABLE_NAME = 'users';
   var $pdo;

   function __construct()
   {
      $db = new DB();
      $this->pdo = $db->connect();
   }

   function getAll(){
      $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME);
      $stmn->execute();
      $row = array();
      while($r=$stmn->fetch(PDO::FETCH_ASSOC)) {
         array_push($row,$r);
      }
      return $row;
   }

   function delete($id){
      $stmn = $this->pdo->prepare('DELETE FROM '.self::TABLE_NAME.' WHERE id=?');
      $stmn->execute(array($id));
   }

   function update($id,$fullname,$pwd){
      $stmn = $this->pdo->prepare('UPDATE '.self::TABLE_NAME.'
      SET fullname=:fullname,
      SET pwd=:pwd WHERE id=:id');
      $stmn->execute(
      array(
        ':fullname'=>$fullname,
        ':pwd'=>$pwd,
        ':id'=>$id
       )
      );
   }

   function findById($id){
     $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME.' WHERE id=?');
     $stmn->execute(array($id));
     return $stmn->fetch(PDO::FETCH_ASSOC);
   }

   function findByUserNamePwd($username,$pwd){
     $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME.' WHERE username=? AND pwd=?');
     $stmn->execute(array($username,$pwd));
     if($stmn->rowCount()==0){
       return $stmn->rowCount();
     }else{
       return $stmn->fetch(PDO::FETCH_ASSOC);
     }
   }
 }

?>
