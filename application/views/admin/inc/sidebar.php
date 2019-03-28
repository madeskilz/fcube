<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title><?= $pg_title?> | F-Cube Admin Area</title>
		<!-- Favicon -->
        <link href="<?=base_url("assets/favicon.ico");?>" rel="shortcut icon">
		<!-- CSS -->
		<link href="<?= base_url("assets/plugins/bootstrap/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/plugins/owl-carousel/owl.carousel.min.css");?>" rel="stylesheet">
		<link href="<?= base_url("assets/plugins/datatables/datatables.min.css");?>" rel="stylesheet">
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
			.dropdown-custom {
				position: absolute;
				top: 100%;
				right: 0;
				z-index: 1000;
				display: none;
				float: right;
				min-width: 10rem;
				padding: .5rem 0;
				margin: .125rem 0 0;
				font-size: 1rem;
				color: #212529;
				text-align: left;
				list-style: none;
				background-color: #fff;
				background-clip: padding-box;
				border: 1px solid rgba(0,0,0,.15);
				-webkit-transition: all 1.2s ease-out;
				-moz-transition: all 1.2s ease-out;
				-o-transition: all 1.2s ease-out;
				transition: all 1.2s ease-out;
			}
			.user_icon:hover .dropdown-custom, .user_icon:focus .dropdown-custom{
				display:block;
			}
            .user_icon{
                position: fixed;
                top: 0;
				color: #1c6169;
                z-index: 990;
                background: #fff;
                width: 60px;
                height: 60px;
                border-bottom: 1px solid #e6e6e6;
                border-left: 1px solid #e6e6e6;
                -webkit-transition: ease-out .2s;
                transition: ease-out .2s;
            }
			.title-mobile{
				margin-left:30%;
				margin-top:10px;
			}
			@media screen and (max-width:768px){
				.title-mobile{
					display:block;
					text-align:center;
					margin-left:unset !important;
				}
			}
        </style>
	</head>
	<body data-preloader="2">
		
		<!-- Sidebar Navigation -->
		<div class="sidebar-nav-left">
		<div style="position:fixed;top:0;background:#fff;width:100%;height:60px;z-index:989;border-bottom: 1px solid #e6e6e6;">
			<button class="sidebar-nav-toggle">
	            <span class="lines"></span>
	        </button>
			<h5 class="font-weight-normal text-uppercase title-mobile"><?= $pg_title?></h5>
			<div class="dropdown">
			<button id="user-icon" aria-haspopup="true" href="javascript:void(0);" class="user_icon pull-right" style="display:block !important;float:right;right:0;left:unset;">
	            <span class="fa fa-user"></span>
        	</button>
			<div class="dropdown-custom">
				<a class="dropdown-item" href="<?= base_url("admin/wallet_funding");?>">Wallet Funding</a>
				<a class="dropdown-item" href="<?= base_url("dashboard/manage_users");?>">Manage Users</a>
				<a class="dropdown-item" href="#">Sign Out</a>
			</div>
			</div>
		</div>
	        <div class="sidebar-nav-content"><!-- add background class here 'bg-grey / bg-dark / bg-dark-lighter' -->
	        	<div class="sidebar-logo" style="text-align:center;background: #ffc107;padding-bottom: 0px;">
                    <!-- <h4 class="no-margin"><a href="../index.html">F-Cube Digitals</a></h4> -->
					<img src="<?= base_url("assets/images/logo-1.jpeg");?>" style="width: 120px;min-height: 50px;" />
				</div>
				<ul class="sidebar-menu">
					<li class="<?php if($pg_name == "dashboard") echo "active";?>">
						<a class="" href="<?= base_url("admin");?>"> <i class="fas fa-home"></i> Dashboard</a>
					</li>
					<li class="<?php if($pg_name == "services") echo "active";?>">
						<a class="" href="<?= base_url("admin/manage_services");?>"> <i class="fas fa-bell"></i> Manage Services</a>
					</li>
					<li class="<?php if($pg_name == "plans") echo "active";?>">
						<a class="" href="<?= base_url("admin/manage_plans");?>"> <i class="fas fa-wifi"></i> Manage Plans</a>
					</li>
					<li class="<?php if($pg_name == "users") echo "active";?>">
						<a class="" href="<?= base_url("admin/manage_users");?>"> <i class="fas fa-users"></i> Manage Users</a>
					</li>
					<li class="<?php if($pg_name == "wallet") echo "active";?>">
						<a class="" href="<?= base_url("admin/wallet_funding");?>"> <i class="fas fa-wallet"></i>  Wallet Funding</a>
					</li>
					<li>
						<a class="" href="#"> <i class="fas fa-power-off"></i> Sign Out</a>
					</li>
				</ul>
				<div class="sidebar-bottom" style="padding:10px;">
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