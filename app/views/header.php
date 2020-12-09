<!DOCTYPE HTML>

<head>
	<title>Store Website</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="<?php echo BASE_URL ?>/public/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo BASE_URL ?>/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo BASE_URL ?>/public/js/jquerymain.js"></script>
	<script src="<?php echo BASE_URL ?>/public/js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>/public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>/public/js/nav.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>/public/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>/public/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>/public/js/nav-hover.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('#dc_mega-menu-orange').dcMegaMenu({
				rowItems: '4',
				speed: 'fast',
				effect: 'fade'
			});
		});
	</script>
</head>

<body>
	<div class="header_top">
		<div class="wrapper">
			<div class="header__logo">
				<span>Ko</span>lors.
			</div>
			<div class="header__search">
				<form action="<?php echo BASE_URL ?>/index/search" autocomplete="off" method="POST">
					<input type="text" name="search">
					<button><img src="https://img.icons8.com/material-two-tone/24/000000/search.png" /></button>
				</form>
			</div>
			<div class="header__account">
				<a href="<?php echo BASE_URL ?>/login/"> <img src="https://img.icons8.com/windows/32/000000/login-rounded-right.png" /> Login</a>
			</div>
			</>
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<div class="menu">

		<ul id="dc_mega-menu-orange" class="dc_mm-orange">
			<div class="wrapper">
				<li><a href="<?php echo BASE_URL ?>">Trang chủ</a></li>
				<li><a href="<?php echo BASE_URL ?>/allproduct/tatca">Sản phẩm</a> </li>
				<li><a href="<?php echo BASE_URL ?>/giohang">Giỏ hàng</a></li>
				<li><a href="contact.php">Liên hệ</a> </li>
				<div class="clear"></div>
			</div>
		</ul>
	</div>