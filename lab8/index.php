<?php
  $conn = mysqli_connect('localhost','root', 'koodinh');
  if(!$conn){
    die('Ket noi loi cmnr '.mysqli_connect_error());
  };

  mysqli_query($conn,'use learning');

  //insert data into db
  /*$sql = 'INSERT INTO users(fb_id,
    user_name,
    full_name,
    pwd,
    email,
    phone,
    address,
    website,
    perm,
    avt,
    activated) VALUES("01281972189",
      "gangster",
      "Luan",
      "'.md5("hihi").'",
      "luann4099@gmail.com",
      "0868120349",
      "Ha Noi",
      "google.com.vn",
      1,
      "image.path",
      1)';
  $check=mysqli_query($conn,$sql) or die(mysqli_error($conn));
  //echo $check;
  if($check){
    echo 'Ngon, dep zai';
  }else{
    echo 'Xau vãi noi';
  }*/
/*
  $sql = 'SELECT * FROM users';
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if(mysqli_num_rows($result) > 0){
   while ($row=mysqli_fetch_assoc($result)) {
    echo $row['full_name'].'-'.$row['user_name'].'-'.$row['email'].'<br>';
   };
  }else{
    echo 'Khong co du lieu trong bang';
  };*/

  $sql = 'INSERT INTO users(
    fb_id,
    user_name,
    full_name,
    pwd,
    email,
    phone,
    address,
    website,
    perm,
    avt,
    activated) VALUES(?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?,
      ?)';
    $stmn= mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmn, 'ssssssssisi',
    $fb_id,
    $user_name,
    $full_name,
    $pwd,
    $email,
    $phone,
    $address,
    $website,
    $perm,
    $avt,
    $activated);

    $fb_id = mysqli_real_escape_string($conn,'11121k1l2j1kl');
    $user_name='Hehe';
    $full_name='LUn dksadjklasd';
    $pwd=md5("ahskdahs");
    $email='laa';
    $phone='89278347893';
    $address='káljdaklsdj';
    $website='ákdasjkld';
    $perm=1;
    $avt='ákdljasdklasjd';
    $activated=1;

    mysqli_stmt_execute($stmn);

    mysqli_close($conn);
?>
