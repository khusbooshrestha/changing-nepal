<?php include 'header.php' ?>
<style type="text/css">
	.products .product-box .product-image img {
		width: 100%;
		height: 200px;
	}
	.products .product-box .product-detail {
		padding: 10px;
		border: 1px solid #acacac21;
		min-height: 75px;
	}
	.products .product-box {
		transition: all 0.5s linear;
		-webkit-transition: all 0.5s linear;
		-moz-transition: all 0.5s linear;
		box-shadow: 1px 1px 20px 1px rgba(0, 0, 0, 0.08);
		-webkit-box-shadow: 1px 1px 20px 1px rgba(0, 0, 0, 0.08);
		-moz-box-shadow: 1px 1px 20px 1px rgba(0, 0, 0, 0.08);
		margin: 10px;
		background-color: #fff;
	}
	.products .product-box .product-detail {
		padding: 10px;
		border: 1px solid #acacac21;
		min-height: 75px;
	}

	.products .product-box a{
		font-family: "Lato", sans-serif;
		text-align: left;
		font-size: 15px;
		color: #202020;
		line-height: 24px;
	}
	.products .product-box a:hover {
		text-decoration: none;
		color: #49ad22;
	}
	.products .product-box .product-detail h4 {
		text-transform: capitalize;
		font-size: 18px;
	}


</style>


<section class="inner-banner" style="background-image: url(images/bg2.jpg);">
	<div class="container">
		<div class="banner-bread">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Products</li>
				</ol>
				<h1>
					Services
				</h1>
			</nav>
		</div>
	</div>
</section>



<div class="products-listing">
	<section class="products padding">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="head-box">
						<span>OUR PRODUCTS</span>
						<h2>It's easy to be <strong>Udhyami,</strong> why not start own Business ?</h2>
					</div>
				</div>	
				<div class="col-lg-4 col-md-4">
					<div class="product-box">
						<div class="product-image">
							<img src="images/product1.png" alt="">
						</div>
						<div class="product-detail">
							<h4> <a href="product.php">ultrasonic paper cup machine</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="product-box">
						<div class="product-image">
							<img src="images/product2.jpg" alt="">
						</div>
						<div class="product-detail">
							<h4> <a href="product.php">bhujiya namkeen making machine</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="product-box">
						<div class="product-image">
							<img src="images/product3.jpg" alt="">
						</div>
						<div class="product-detail">
							<h4> <a href="product.php">noodles dryer machine</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="product-box">
						<div class="product-image">
							<img src="images/product4.jpg" alt="">
						</div>
						<div class="product-detail">
							<h4> <a href="product.php">korean bread making machine</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="product-box">
						<div class="product-image">
							<img src="images/product1.png" alt="">
						</div>
						<div class="product-detail">
							<h4> <a href="product.php">momo wrapper making machine</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



<?php include 'footer.php' ?>