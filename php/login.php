<?php
 //session_start();
 include "db.php";
 if(isset($_POST['login']))
 {
 //$id=$_POST['id'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $q=mysqli_query($con,"SELECT * FROM `register` WHERE `email` = '$email' AND `password` = '$password'");
 if($q){
  echo "success";
  
 }
 else
  echo "error";
 }
 ?>
