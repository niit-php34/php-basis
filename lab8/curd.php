<?php
$conn = mysqli_connect('localhost', 'root', 'koodinh');
if (!$conn) {
    die('Ket noi loi cmnr '.mysqli_connect_error());
};
mysqli_query($conn, 'use learning');

if (isset($_GET['action'])) {
    //neu nhu ton tai thao tac
    $action = $_GET['action'];
    switch ($action) {
    case 'delete':
      //delete
      $id = $_GET['id'];
      if (is_numeric($id)) {
          $sql = 'DELETE FROM users WHERE id='.mysqli_real_escape_string($conn, $id);
          mysqli_query($conn, $sql);
      }
      break;

    case 'update':
       //update
       //lay id tu url roi
       //chuyen id sang trang update
       $id = $_GET['id'];
       if (is_numeric($id)) {
           header('Location: update.php?id='.$id);
       }
       break;

    default:
      break;
  }
}

if (isset($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
    case 'add':
      //day du lieu len
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
      $pwd = md5(mysqli_real_escape_string($conn, $_POST['pwd']));
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $email=mysqli_real_escape_string($conn, $_POST['email']);

      $sql= 'INSERT INTO
      users(user_name,full_name,pwd,email,address,phone)
      VALUES("'.$username.'","'.$fullname.'","'.$pwd.'","'.$email.'","'.$address.'","'.$phone.'")';
      mysqli_query($conn, $sql) or die(mysqli_error($conn));

      break;

      case 'update':
      $id= mysqli_real_escape_string($conn, $_POST['id']);
      $fullname =mysqli_real_escape_string($conn, $_POST['fullname']);
      $address =mysqli_real_escape_string($conn, $_POST['address']);
      $sql = 'UPDATE users SET full_name = "'.$fullname.'",address="'.$address.'" WHERE id='.$id;
      mysqli_query($conn, $sql) or die(mysqli_error($conn));
      break;

    default:
      # code...
      break;
  }
}

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <a href="add.php">Add(thêm)</a>
     <table class="table-wrapper">
       <thead>
           <tr>
             <td>id</td>
             <td>username</td>
             <td>fullname</td>
             <td>email</td>
             <td>address</td>
             <td>phone</td>
             <td>Thao tac (action)</td>
          </tr>
        </thead>

         <tbody>
           <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['user_name']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td>
                    <a href="?action=delete&id=<?php echo $row['id']; ?>">Delete(xoá)</a>
                    <a href="?action=update&id=<?php echo $row['id']; ?>">Edit(Sửa)</a>
                  </td>
                </tr>
              <?php
            }
           ?>
         </tbody>
     </table>
  </body>

  <style>
     .table-wrapper td{
       padding:20px;
     }
     .table-wrapper t
  </style>
</html>
