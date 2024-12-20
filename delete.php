<?php
include 'database.php';
  $userid = $_GET['id'];
$sql= "DELETE FROM user where userid={$userid}";
$result=mysqli_query($conn,$sql);

header("Location: users.php");

mysqli_close($con);

 ?>
