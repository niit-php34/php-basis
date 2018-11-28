<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <form method="post" action="curd.php">
       <input type="hidden" name="action" value="add"/>
         <div>
           <label>Username</label>
           <input type="text" name="username"/>
         </div>

         <div>
           <label>Fullname</label>
           <input type="text" name="fullname"/>
         </div>

         <div>
           <label>Password</label>
           <input type="password" name="pwd"/>
         </div>

         <div>
           <label>Email</label>
           <input type="text" name="email"/>
         </div>

         <div>
           <label>Phone</label>
           <input type="text" name="phone"/>
         </div>

         <div>
           <label>Address</label>
           <input type="text" name="address"/>
         </div>

         <input type="submit" value="Submit"/>

     </form>
  </body>
</html>
