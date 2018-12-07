<?php
   class DB
   {
     var $pdo;
     var $host;
     var $dbname;
     var $username;
     var $pass;
     function __construct(
     $host='localhost',
     $dbname='news',
     $username='root',
     $pass='koodinh')
     {
       $this->host = $host;
       $this->dbname=$dbname;
       $this->username=$username;
       $this->pass=$pass;
     }

     function connect(){
       $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname
       ,$this->username
       ,$this->pass);
       return $this->pdo;
     }

     function disconnect(){
       $this->pdo=null;
       return true;
     }
   }
?>
