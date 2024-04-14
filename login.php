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
      <a href="login.php">Home</a>
    <a href="register.php">Register</a>
   <a href="login.php">login</a>
  </div>
  </nav> 
<section>
        <div class="first">
         <h2>Employe Login Page</h2>
        </div>
        <div class="secound">
   <form action="" method="POST">
   <input type="email" name="email" placeholder="Enter Email" >
   <input type="password" name="password" placeholder="Enter password">
   <button type="submit" name="submit" class="btn">Sing-in</button>
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
    </section>

    <footer>
    <h2>@copyright</h2>
    </footer>
</body>
</html>

<?php
include "conection.php";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

$search = "select * from registerfirst where email='$email'";
$res=mysqli_query($con,$search);
$data = mysqli_fetch_array($res);
// $count = mysqli_num_rows($res); 
if($data['email'] === $email && $data["password"] === $password){
    $_SESSION['success']="Email and password are match";
    header("location: index.php"); 
}
else{
    $_SESSION['status']="Email and password are not match";
     header("location: login.php");
}
}
?>
