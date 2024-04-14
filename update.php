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
    <main>
        <div class="contaner">
            <h2 style="color:saddlebrown">Update user Data</h2>
    <?php
    include "conection.php";
    $id=$_GET['id'];
$select ="select * from  registerfirst where id='$id'";
$selectquery=mysqli_query($con,$select);
$res=mysqli_fetch_array($selectquery);

if(isset($_POST['submit'])){
$id=$_GET['id'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $update="update registerfirst set  name='$name',email='$email',contact='$contact',address='$address',
    password='$password',cpassword='$cpassword' where id='$id'";

    $updatequery=mysqli_query($con,$update);
 header("location: index.php");
}   

    ?>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter username" value="<?php echo $res['name'] ?>">
                <input type="email" name="email" placeholder="Enter email" value="<?php echo $res['email'] ?>">
                <input type="number" name="contact" placeholder="Enter contact" value="<?php echo $res['contact'] ?>">
                <input type="text" name="address" placeholder="Enter address" value="<?php echo $res['address'] ?>">
                <input type="text" name="password" placeholder="Enter password" value="<?php echo $res['password'] ?>">
                <input type="text" name="cpassword" placeholder="Enter cofirm password" value="<?php echo $res['cpassword'] ?>">
                <button type="submit" name="submit" class="bt">Update</button>
            </form>
        </div>
    
    </main>
</body>
</html>

