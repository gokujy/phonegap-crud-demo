<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $first=$_POST['first'];
 $last=$_POST['last'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $q=mysqli_query($con,"INSERT INTO `register` (`first`,`last`,`email`,`password`) VALUES ('$first','$last','$email','$password')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>