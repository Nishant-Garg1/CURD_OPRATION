<?php

include "conection.php";
$id=$_GET['id'];
$delete="delete from registerfirst where id='$id'"; 
$deletequery=mysqli_query($con,$delete);
header("location: index.php");
?>