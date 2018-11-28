<?php
   //lay id tu trang curd truyen sang
   $id= $_GET['id'];
   if (is_numeric($id)) {
       //ket noi csdl
       $conn = mysqli_connect('localhost', 'root', 'koodinh');
       if (!$conn) {
           die('Ket noi loi cmnr '.mysqli_connect_error());
       };
       mysqli_query($conn, 'use learning');

       //lay ban ghi theo id lay duoc
       $sql = 'SELECT * FROM users WHERE id='.$id;
       $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
       $user = mysqli_fetch_assoc($result);
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <form method="post" action="curd.php">
       <input type="hidden" name="action" value="update"/>
       <!--truyen id vao hidden input để submit lên server -->
       <input type="hidden" name="id" value="<?php echo $id; ?>"/>
         <div>
           <label>Fullname</label>
           <input type="text" name="fullname" value="<?php echo $user['full_name'];  ?>"/>
         </div>

         <div>
           <label>Address</label>
           <input type="text" name="address" value="<?php echo $user['address']; ?>"/>
         </div>

         <input type="submit" value="Submit"/>

     </form>
  </body>
</html>
