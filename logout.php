<?php
session_start();
$U=$_SESSION['email'];
session_destroy();
header("location:MangoorCart.php?msg=successfully logged out");
 ?>
