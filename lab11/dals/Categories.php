<?php
 require 'DB.php';
 class Categories
 {
   const TABLE_NAME = 'categories';
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

   function update($name,$id){
      $stmn = $this->pdo->prepare('UPDATE '.self::TABLE_NAME.' SET name=:name WHERE id=:id');
      $stmn->execute(array(':name'=>$name,':id'=>$id));
   }

   function findById($id){
     $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME.' WHERE id=?');
     $stmn->execute(array($id));
     return $stmn->fetch(PDO::FETCH_ASSOC);
   }
 }

?>
