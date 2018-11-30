<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=learning", "root", "koodinh");
    //query for select
    $data=$conn->query('SELECT * FROM `users`');
    foreach($data as $r) {
      //var_dump($r);
      echo $r['user_name'];
      echo $r['full_name'];
      echo $r['address'];
      echo '<br>';
    }

    //insert update delete
    $row=$conn->exec(
      'INSERT INTO users(user_name,pwd,full_name,address,phone)
      VALUES("koodinh","koodinh","Nguyen Thanh Luan","Ha Long","086819182")');
    echo $row.' affected';


    //prepared statement cach 1
    $preparestm = $conn->prepare('SELECT * FROM users WHERE id=?');
    $preparestm->execute(array(1));
    //lay theo mang lk
    while ($row = $preparestm->fetch(PDO::FETCH_ASSOC)) {
       echo $row['user_name'];
    }
    //lay theo mang index
    while ($row = $preparestm->fetch(PDO::FETCH_NUM)){
      echo $row[1];
    }

    //cach 2
    $preparestm = $conn->prepare('SELECT * FROM users WHERE id=:id AND user_name=:username');
    $preparestm->execute(array(':id'=>id,':username'=>"admin"));
    while ($row = $preparestm->fetch(PDO::FETCH_ASSOC)) {
       echo $row['user_name'];
    }

    //cach 3
    $preparestm = $conn->prepare('SELECT * FROM users WHERE id=? AND user_name=?');
    $preparestm->bindParam(1,$id);
    $preparestm->bindParam(2,$user_name);
    $id = 1;
    $user_name = 'admin';

    //cach 4
    $preparestm = $conn->prepare('SELECT * FROM users WHERE id=:id AND user_name=:username');
    $preparestm->bindParam(':id',$id);
    $preparestm->bindParam(':username',$user_name);
    $id = 1;
    $user_name = 'admin';

    //cac lenh insert , update lam tuong tu


} catch (\Exception $e) {
    echo $e;
}
