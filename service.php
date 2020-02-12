<?php include 'header.php' ?>
<style type="text/css">
	.service-image {
		float: left;
	}
	.service-image img {
		max-width: 100%;
		height: 400px;
		margin-right: 40px;
		border: 1px solid #80808061;
		box-shadow: 1px 2px 3px 2px #8080806e;
	}

	.service-section .service-content-header h3 {
		font-weight: bold;
		font-size: large;
		position: relative;
		padding-left: 68%;
	}
	.service-section .service-content-header h3::after {
		content: "";
		position: absolute;
		display: inline-block;
		top: 50%;
		right: 0;
		left: 59%;
		width: 80px;
		height: 1px;
		background-color: #f58802;
	}
</style>

<section class="inner-banner" style="background-image: url(images/bg2.jpg);">
	<div class="container">
		<div class="banner-bread">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Services</li>
				</ol>
				<h1>
					Services
				</h1>
			</nav>
		</div>
	</div>
</section>

<div class="services-inner">
	<section class="service-section padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="service-image">
						<img src="images/product3.jpg">
					</div>
					<div class="service-content-header">
						<h3>Complete Machinery Supply</h3>
					</div>
					<div class="service-inner">
						<p>We supply all kinds of production, recycle, construction, agriculture machineries to all over Nepal. These machines include all machines spare parts, paper cup machine, egg tray machine, bag making machine and many more</p>
					</div>
				</div>
			</div>
		</div>
	</section>	
</div>
<?php include 'footer.php' ?>