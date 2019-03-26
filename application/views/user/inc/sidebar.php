<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title><?= $pg_title?> | F-Cube User Area</title>
		<!-- Favicon -->
        <link href="<?=base_url("assets/favicon.ico");?>" rel="shortcut icon">
		<!-- CSS -->
		<link href="<?= base_url("assets/plugins/bootstrap/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/plugins/owl-carousel/owl.carousel.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/plugins/owl-carousel/owl.theme.default.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/plugins/magnific-popup/magnific-popup.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/css/app.min.css");?>" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="<?= base_url("assets/plugins/font-awesome/css/all.css");?>" rel="stylesheet">
        <link href="<?= base_url("assets/plugins/themify/themify-icons.min.css");?>" rel="stylesheet">
        <style>
            ul.sidebar-menu li.active{
                background: #ffc107;
            }
            ul.sidebar-menu li{
                padding: 10px;
            }
            .user_icon{
                position: fixed;
                top: 0;
                z-index: 996;
                background: #fff;
                width: 60px;
                height: 60px;
                border-bottom: 1px solid #e6e6e6;
                -webkit-transition: ease-out .2s;
                transition: ease-out .2s;
            }
        </style>
	</head>
	<body data-preloader="2">
		
		<!-- Sidebar Navigation -->
		<div class="sidebar-nav-left">
			<button class="sidebar-nav-toggle">
	            <span class="lines"></span>
	        </button>
			<button href="javascript:void(0);" class="user_icon pull-right" style="display:block !important;float:right;right:0;left:unset;">
	            <span class="fa fa-user"></span>
        	</button>
	        <div class="sidebar-nav-content"><!-- add background class here 'bg-grey / bg-dark / bg-dark-lighter' -->
	        	<div class="sidebar-logo" style="text-align:center;background: #ffc107;padding-bottom: 0px;">
                    <!-- <h4 class="no-margin"><a href="../index.html">F-Cube Digitals</a></h4> -->
					<img src="<?= base_url("assets/images/logo-1.jpeg");?>" style="width: 120px;min-height: 50px;" />
				</div>
				<ul class="sidebar-menu">
					<li class="<?php if($pg_name == "dashboard") echo "active";?>">
						<a class="" href="<?= base_url("dashboard");?>"> <i class="fas fa-home"></i> Dashboard</a>
					</li>
					<li class="<?php if($pg_name == "airtime") echo "active";?>">
						<a class="" href=<?= base_url("dashboard/airtime_recharge");?>> <i class="fas fa-signal"></i> Airtime Recharge</a>
					</li>
					<li class="<?php if($pg_name == "data") echo "active";?>">
						<a class="" href=<?= base_url("dashboard/data_recharge");?>> <i class="fas fa-wifi"></i> Data Recharge</a>
					</li>
					<li class="<?php if($pg_name == "tv") echo "active";?>">
						<a class="" href=<?= base_url("dashboard/tv_subscription");?>> <i class="fas fa-desktop"></i> TV Subscription</a>
					</li>
					<li class="<?php if($pg_name == "electric") echo "active";?>">
						<a class="" href=<?= base_url("dashboard/electric_bill");?>> <i class="fas fa-car-battery"></i> Electric Bills</a>
					</li>
					<li class="<?php if($pg_name == "wallet") echo "active";?>">
						<a class="" href=<?= base_url("dashboard/my_wallet");?>> <i class="fas fa-wallet"></i> My Wallet</a>
					</li>
					<li>
						<a class="" href="#"> <i class="fas fa-power-off"></i> Logout</a>
					</li>
				</ul>
				<div class="sidebar-bottom">
					<ul class="list-horizontal-unstyled margin-bottom-10">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					</ul>
					<p>&copy; <?= date("Y");?> F-Cube Diigitals</p>
				</div>
	        </div>
		</div>
		<div class="sidebar-wrapper-left">