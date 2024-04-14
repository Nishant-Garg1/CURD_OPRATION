<?php
session_start();
 
?>
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
    <main>
        <div class="contaner">
            <h2 style="color:saddlebrown">User Registration form</h2>
    
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter username" >
                <input type="email" name="email" placeholder="Enter email">
                <input type="number" name="contact" placeholder="Enter contact">
                <input type="text" name="address" placeholder="Enter address">
                <input type="text" name="password" placeholder="Enter password">
                <input type="text" name="cpassword" placeholder="Enter cofirm password">
                <button type="submit" name="submit" class="bt">Register</button>
            </form>
        </div>
        <div>
      <?php
      if(isset($_SESSION['success'])&& $_SESSION['success']!=''){
      echo'<h2>'.$_SESSION['success'].'</h2>';
         unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
           echo'<h2>'. $_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
</div>
    </main>
    <footer>
    <h2>@copyright</h2>
    </footer>
</body>
</html>

<?php
include "conection.php";
if(isset($_POST['submit'])){

    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password === $cpassword){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $insert="insert into registerfirst (name,email,contact,address,password,cpassword) 
    values('$name','$email','$contact','$address','$password','$cpassword')
    ";

    $insertquery=mysqli_query($con,$insert);
  
    if($insertquery){
        $_SESSION['success']="admin profile added";
         header("location: login.php");
    }
else{
    $_SESSION['status']="password and confim password does not match";
         header("location: register.php");   
        }     
}   
}

?>
