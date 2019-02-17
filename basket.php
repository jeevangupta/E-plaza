<?php
include"connection.php";
if (isset($_REQUEST['submit']))
{
  $pname=$_POST['p_name'];
  $email=$_POST['email'];
  $price=$_POST['price'];
  $query="INSERT into basket values('','$pname','$price','$email')";
  $result=$connection->query($query);
  header("location:sofa.php");
}
 ?>
 <?php
 session_start();
 $u=$_SESSION['email'];
 ?>
 <html>
 <head>
   <link rel="stylesheet" type="text/css" href="MangoorCart.css">
   <link rel="stylesheet" type="text/css" href="basket.css">
   <title>MangoorCart - Online Furniture Shop</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 </head>

 <body onload=all()>

   <div>
   <h1 class="main"><em> MangoorCart</em><i class="material-icons" style="font-size:36px">add_shopping_cart</i></h1>
   </div>
   <div class="one">
     <a onclick="window.location.href='aboutus.html'" style="padding-left: 2%;"target="_blank"><em> Aboutus</em></a>
     <?php if(isset($_SESSION['email'])){?>
       <a onclick="window.location.href='signin.html'" style="padding-right:2%;padding-left:55%" target="_blank"><em> <?echo $_SESSION['email']?></em></a>
     <? }
     else{
       ?>
       <a onclick="window.location.href='signin.html'" style="padding-right:2%;padding-left:70%" target="_blank"><em> Signin</em></a>
       <?
     }?>
     <a href="logout.php" style="padding-right:2%;">logout</a>
     <a onclick="window.location.href='basket.php'" style="padding-right:2%;" target="_blank"><em> Basket</em></a>
   </div>
   <div class="two">
   <button id="new" onclick="window.location.href='MangoorCart.php'">New</button>
   <button id="sofa" onclick="window.location.href='sofa.php'">Sofa</button>
   <button id="chairs" onclick=chairs()>Chairs</button>
   <button id="tables" onclick=tables()>Tables</button>
   <button id="beds" onclick=beds()>Beds</button>
   <button id="lighting" onclick=lighting()>Lighting</button>
   <input type="text" class="search" placeholder="Search.." name="search"/>
   <button type="submit" class="search"><i class="material-icons">search</i></button>
   </div>


<?php
include"connection.php";
$email=$_SESSION['email'];
$sql = "SELECT * FROM basket WHERE email='$email'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {?>
  <div class='area'>
  <h2><em>Your Basket Contain</em></h1>
  <div class='head1'>
    <table>
      <thead>
      <tr><th><em>PRODUCT</em></th><th><em>PRICE</em></th><th><em>EMAIL</em></th></tr>
      </thead>
    </table>
  </div>
  <div class='head2'>
    <table>
      <tbody>
  <?  while($row = $result->fetch_assoc()) {?>
        <tr><td><?echo $row['p_name']?></td><td><?echo $row['price']?></td><td><? echo $row['email']?></td>
        <td><form method="POST" action="remove.php">
          <input type="text" name="nam" value="<? echo $row['p_name']?>" hidden>
          <input type="text" name="eml" value="<? echo $row['email'];?>" hidden><button type="submit" name="submit"/>Remove</form></td></tr>
  <?  }?>
      <tbody>
    </table>
<?} else {
    echo "0 results";
}?>
<?
$connection->close();
?>
</div>
<div class='head3'>
  <?php
  include"connection.php";
  $eml=$_SESSION['email'];
  $sql = "SELECT SUM(price) AS total FROM basket WHERE email='$eml'";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc()?>
  <table>
    <tfooter>
    <tr><th colspan="2"><em>YOUR TOTAL</em></th><th><em><?echo $row['total']?>/-</em></th></tr>
  </tfooter>
  </table>
  <?  }?>
</div>
<div class="two">
  <button type="cancel" onclick="window.location.href='MangoorCart.php'">Cancel</button>
  <button type="submit" class="signupbtn" name="submit" value="Submit">Proceed To Pay</button>
</div>
<script>
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
</html>
