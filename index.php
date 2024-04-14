

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div class="left">
  <h2 style="color: white;">Nishnat Technical</h2>
  </div>
  <div class="right">
      <a href="index.php">Home</a>
    <a href="register.php">Register</a>
   <a href="login.php">login</a>
  </div>
  </nav> 

  <h2 style="color: gray; text-align:center; margin:30px">User Data</h2>

  <table  >
  <thead >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Password</th>
        <th>Cpassword</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody >
    <tr>
    <?php
include "conection.php";
$select="select * from registerfirst ";
$res=mysqli_query($con,$select);
while($arr=mysqli_fetch_array($res)){
    
?>
        <td><?php echo $arr['id'] ?></td>
        <td><?php echo $arr['name'] ?></td>
        <td><?php echo $arr['email'] ?></td>
        <td><?php echo $arr['contact'] ?></td>
        <td><?php echo $arr['address'] ?></td>
        <td><?php echo $arr['password'] ?></td>
        <td><?php echo $arr['cpassword'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $arr['id'] ?>" style="color:green;">Edit</a>
            <a href="delete.php?id=<?php echo $arr['id'] ?>" style="color:red; ">Delete</a>
        </td>
        </tr>
        <?php
}
?>
 </tbody>   
  </table>

  <footer>
    <h2>@copyright</h2>
    </footer>
</body>
</html>

