<?php
include"connection.php";
if (isset($_REQUEST['submit']))
{
  $pname=$_POST['nam'];
  $email=$_POST['eml'];
  $query="DELETE FROM basket WHERE  p_name='".$pname."' AND email='".$email."'";
  $result=$connection->query($query);
  if ($result === TRUE) {
    echo "Record deleted successfully";
    header("location:basket.php");
} else {
    echo "Error deleting record: " . $connection->error;
}

}

 ?>
