<?php include 'header.php' ?>

<style type="text/css">
	:focus {
		outline: none;
	}
	.product-side-image img {
		width: 100px;
		height: 100px;
		box-shadow: 1px 5px 5px 0px #808080bf;
		border: 1px solid #8080806b;
	}
	.product-zoom-image img {
		width: 100%;
		height: 426px;
		box-shadow: 1px 5px 5px 0px #808080bf;
		border: 1px solid #8080806b;
		margin-left: 20px;
	}
	.product-detail-image .slider-for{
		width: 500px;
		height: auto;
		margin: 10px auto 1px;
		overflow: hidden;
	}
	.product-detail-image .slider-nav{
		width: 500px;
		height: auto;
		margin-top: -41px;
		overflow: hidden;
	}

	.youtube-video iframe{
		margin-top: 40px;
		width: 620px;
		height: 315px;
	}

	.process-list{
		margin-top: 20px;
		color: #696969;
		font-size: 14px;
		text-align: justify;
	}

	.media-share{
		border: 1px solid #80808073;
		padding: 10px 20px 0 10px; 
	}
	.media-share .social-link{
		display: inline;
	}

}
.social-link li {
	display: inline-block;
	font-size: 20px;
	height: 32px;
	width: 32px;
	line-height: 32px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	margin-right: 10px;
	text-align: center;
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
					Products
				</h1>
			</nav>
		</div>
	</div>
</section>

<div class="products-inner">
	<section class="products-section padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="product-detail-image">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-12">
								<div class="slider-nav">
									<div class="product-side-image">
										<img src="images/socks-machine.jpg">
									</div>
									<div class="product-side-image">
										<img src="images/socks-knitting-machine.jpg">
									</div>
									<div class="product-side-image">
										<img src="images/socks-ironing-machine.jpg">
									</div>
								</div>
							</div>
							<div class="col-lg-10 col-md-9 col-12">
								<div class="slider-for">
									<div class="product-zoom-image">
										<img src="images/socks-machine.jpg" data-magnify-src="images/socks-machine.jpg">
									</div>
									<div class="product-zoom-image">
										<img src="images/socks-knitting-machine.jpg" data-magnify-src="images/socks-knitting-machine.jpg">
									</div>
									<div class="product-zoom-image">
										<img src="images/socks-ironing-machine.jpg" data-magnify-src="images/socks-ironing-machine.jpg">	
									</div>
								</div>
							</div>
							<div class="youtube-video">
								<iframe src="https://www.youtube.com/embed/F7M9vhOngN4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="product-detail-text">
						<h5>Socks Making Machine</h5>
						<ul class="process-list">
							<li> <p>Different kinds of socks like terry socks, knee socks, ankle socks, quarter socks, long socks, plain socks can be manufactured</p></li>
							<li> <p>The design of the socks can be made by the customer himself</p></li>
							<li> <p>Raw materials are easily available in the local market</p></li>
							<li> <p>All the necessary technical training of the machine and software is provided by the factory itself</p></li>
							<li> <p>It has a good market as the products are evergreen</p></li>
							<li> <p>We can customize the product according to the season and trend</p></li>
						</ul>
					</div>
					<div class="media-share">
						<h5>SHARE</h5>
						<ul class="social-link">
							<li class="facebook">
								<a  href="#" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="instagram">
								<a  href="#" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li class="twitter" >
								<a class="twitter" href="#" target="_blank">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="linked">
								<a  href="#" target="_blank">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>






<?php include 'footer.php' ?>