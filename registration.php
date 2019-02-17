<?php
include "connection.php";
if(isset($_REQUEST['submit']))
{
$name =$_POST["name"];
$email=$_POST["email"];
$pwd =$_POST["password"];
$gender=$_POST["gender"];
$phno=$_POST["phno"];
$qui="INSERT INTO Registration (name, email, password, gender, phno) VALUES ('$name', '$email', '$pwd', '$gender', '$phno')";

$result=$connection->query($qui);
header("Location: MangoorCart.php");
exit;
}
if(isset($_REQUEST['Cancel'])){
  header("Location:MangoorCart.php")
}


 ?>
