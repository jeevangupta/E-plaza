<?php
session_start();
include "connection.php";
$email=$_POST["login_email"];
$psw =$_POST["login_psw"];
$qui="SELECT * FROM Registration WHERE  email='$email' AND password='$psw'";

$result = $connection->query($qui);
if($result->num_rows >0)
{
  $_SESSION['email'] = $email;
  header("Location: MangoorCart.php");
  exit;
}
else {
  echo "<script type='text/javascript'>alert('Please try to remember your Email id and Password');</script>";
}

 ?>
