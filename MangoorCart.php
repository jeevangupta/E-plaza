<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="MangoorCart.css">
  <title>MangoorCart - Online Furniture Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body onload=all()>
  <script>

  </script>
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
    <!--<a href="signin.html" style="padding-right:2%;padding-left:75%" target="_blank"><em> Signin</em></a>-->
    <a onclick="window.location.href='basket.php'" style="padding-right:2%;" target="_blank"><em> Basket</em></a>
  </div>
  <div class="two">
  <button id="new" onclick="window.location.href='MangoorCart.php'">New</button>
  <button id="sofa" onclick="window.location.href='sofa.php'">Sofa</button>
  <button id="chairs" onclick="window.location.href='chairs.html'">Chairs</button>
  <button id="tables" onclick="window.location.href='tables.html'")>Tables</button>
  <button id="beds" onclick="window.location.href='beds.html'">Beds</button>
  <button id="lighting" onclick=lighting()>Lighting</button>
  <input type="text" class="search" placeholder="Search.." name="search"/>
  <button type="submit" class="search"><i class="material-icons">search</i></button>
  </div>
  <div  class="background" role="banner">
    <img src="img/chair2.jpg" alt="chair" style="width:100%;">
    <img src="img/beds2.jpg" alt="Bed" style="width:100%;">
    <img src="img/sofa4.jpg" alt="Sofa" style="width:100%;">
    <img src="img/table2.jpg" alt="table" style="width:100%;">
    <img src="img/light6.jpg" alt="light" style="width:100%;">
						<div class="text">
							<h1>NEW</h1>
						</div>

	</header>


</body>
</html>
