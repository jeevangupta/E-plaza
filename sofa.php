<?php
session_start();
$u=$_SESSION['email'];
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="MangoorCart.css">
  <link rel="stylesheet" type="text/css" href="sofa.css">
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

  <div id="product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Cool Stuff</span>
					<h2>Products.</h2>
					<p>The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(img/sofa5.jpg);">
							<div class="inner">
                <form method="POST" action="basket.php">
								<p>
								<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                <a href="single.html" class="icon"><i class="icon-eye"></i></a>-->
                  <input type="text" name="p_name" value="Delux Sofa Set" hidden>
                  <input type="text" name="email" value="<? echo $u;?>" hidden>
                  <input type="text" name="price" value="25000" hidden>
                  <button type="submit" name="submit"/>
              	</p>
                </form>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Delux Sofa Set</a></h3>
							<span class="price">25000/-</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(img/sofa1.jpg);">
							<div class="inner">
                <form method="POST" action="basket.php">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
                  <input type="text" name="p_name" value="Left Hand Side L Shaped Sofas" hidden>
                  <input type="text" name="email" value="<? echo $u;?>" hidden>
                  <input type="text" name="price" value="24000" hidden>
                  <button type="submit" name="submit"/>
                </p>
                </form>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Left Hand Side L Shaped Sofas</a></h3>
							<span class="price">24000/-</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(img/sofa2.jpg);">
							<div class="inner">
                <form method="POST" action="basket.php">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
                  <input type="text" name="p_name" value="Simple Sofa Set" hidden>
                  <input type="text" name="email" value="<? echo $u;?>" hidden>
                  <input type="text" name="price" value="10000" hidden>
                  <button type="submit" name="submit"/>
                </p>
                </form>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Simple Sofa Set</a></h3>
							<span class="price">10000/-</span>
						</div>
					</div>
				</div>
			</div>
      <div class="col-md-4 text-center animate-box">
        <div class="product">
          <div class="product-grid" style="background-image:url(img/sofa6.jpg);">
            <div class="inner">
              <form method="POST" action="basket.php">
              <p>
                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                <input type="text" name="p_name" value="Stylish Sofa For Living Room" hidden>
                <input type="text" name="email" value="<? echo $u;?>" hidden>
                <input type="text" name="price" value="20000" hidden>
                <button type="submit" name="submit"/>
              </p>
              </form>

            </div>
          </div>
          <div class="desc">
            <h3><a href="single.html">Stylish Sofa For Living Room</a></h3>
            <span class="price">20000/-</span>
          </div>
        </div>
      </div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(img/sofa3.jpg);">
							<div class="inner">
                <form method="POST" action="basket.php">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
                  <input type="text" name="p_name" value="Wing Chair" hidden>
                  <input type="text" name="email" value="<? echo $u;?>" hidden>
                  <input type="text" name="price" value="12000" hidden>
                  <button type="submit" name="submit"/>
                </p>
                </form>

							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Wing Chair</a></h3>
							<span class="price">12000/-</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(img/sofa4.jpg);">
							<div class="inner">
                <form method="POST" action="basket.php">
								<p>
									<a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.html" class="icon"><i class="icon-eye"></i></a>
                  <input type="text" name="p_name" value="Three Seater Sofa" hidden>
                  <input type="text" name="email" value="<? echo $u;?>" hidden>
                  <input type="text" name="price" value="17000" hidden>
                  <button type="submit" name="submit"/>
                </p>
                </form>

							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html">Three Seater Sofa </a></h3>
							<span class="price">17000/-</span>
						</div>
					</div>
				</div>

			</div>
</body>
</html>
