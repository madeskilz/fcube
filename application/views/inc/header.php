<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title><?= $pg_title?> | F-Cube Digitals</title>
		<!-- Favicon -->
        <link href="<?=base_url("assets/images/favicon.png");?>" rel="shortcut icon">
		<!-- CSS -->
		<link href="<?=base_url("assets/plugins/bootstrap/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?=base_url("assets/plugins/owl-carousel/owl.carousel.min.css");?>" rel="stylesheet">
		<link href="<?=base_url("assets/plugins/owl-carousel/owl.theme.default.min.css");?>" rel="stylesheet">
		<link href="<?=base_url("assets/plugins/magnific-popup/magnific-popup.min.css");?>" rel="stylesheet">
		<link href="<?=base_url("assets/css/app.min.css");?>" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="<?=base_url("assets/plugins/font-awesome/css/all.css");?>" rel="stylesheet">
		<link href="<?=base_url("assets/plugins/themify/themify-icons.min.css");?>" rel="stylesheet">
	</head>
	<body data-preloader="2">
		<header>
			<nav class="navbar navbar-dark navbar-sticky navbar-sticky-apply">
				<div class="container">
					<a class="navbar-brand" href="<?= base_url()?>">
						<h5>F-Cube Digitals</h5>
						<!-- <img src="<?//= base_url("assets/images/logo.png");?>" /> -->
					</a>
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url()?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('about')?>">About Us</a>
						</li>
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="javascript:;">Services</a>
				        	<ul class="dropdown-menu">
								<li class="sub-dropdown">
									<a href="javascript:;">Data Services</a>
									<div class="sub-dropdown-menu">
										<a href="javascript:;">Airtel</a>
										<a href="javascript:;">GLO</a>
										<a href="javascript:;">9 Mobile</a>
										<a href="javascript:;">MTN</a>
										<a href="javascript:;">Spectranet</a>
										<a href="javascript:;">Smile</a>
									</div>
								</li>
								<li class="sub-dropdown">
									<a href="javascript:;">Airtime Services</a>
									<div class="sub-dropdown-menu">
										<a href="javascript:;">Airtel</a>
										<a href="javascript:;">GLO</a>
										<a href="javascript:;">9 Mobile</a>
										<a href="javascript:;">MTN</a>
									</div>
								</li>
								<li class="sub-dropdown">
									<a href="javascript:;">TV Subscription</a>
									<div class="sub-dropdown-menu">
										<a href="javascript:;">DStv</a>
										<a href="javascript:;">GOtv</a>
										<a href="javascript:;">StarTimes</a>
										<a href="javascript:;">Kwese</a>
									</div>
								</li>
								<li class="sub-dropdown">
									<a href="javascript:;">Electric Bills</a>
									<div class="sub-dropdown-menu">
										<a href="javascript:;">Ikeja Electric</a>
										<a href="javascript:;">EEDC</a>
										<a href="javascript:;">IBEDC</a>
										<a href="javascript:;">Jos Electric</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('faq')?>">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('contact')?>">Contact Us</a>
						</li>
						<li class="nav-item pull-right text-center">
                            <div class="btn-group text-center" style="height:100%;padding-top:7%;">
							    <a class="btn btn-warning" href="<?= base_url('Auth')?>">Login</a>
							    <a class="btn btn-warning" href="<?= base_url('Auth/Register')?>">Register</a>
                            </div>
						</li>
					</ul><!-- end nav -->
					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button><!-- toggle button will show when screen resolution is less than 992px -->
				</div><!-- end container -->
			</nav>
		</header>

		<!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="javascript:;"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->
