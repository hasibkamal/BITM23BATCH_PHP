<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="assets/front_end_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/front_end_assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/front_end_assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/front_end_assets/css/price-range.css" rel="stylesheet">
    <link href="assets/front_end_assets/css/animate.css" rel="stylesheet">
	<link href="assets/front_end_assets/css/main.css" rel="stylesheet">
	<link href="assets/front_end_assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="assets/front_end_assets/js/html5shiv.js"></script>
    <script src="assets/front_end_assets/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/front_end_assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/front_end_assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/front_end_assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/front_end_assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/front_end_assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php include('includes/header_top.php'); ?>
		
		<?php include('includes/header_middle.php'); ?>
	
		<?php include('includes/header_bottom.php'); ?>
	</header><!--/header-->
	






	<?php

	if(isset($pages)){
		if($pages== 'contact-us'){
			include('pages/contact_us.php');
		}elseif($pages == 'cart'){
			include('pages/cart_content.php');
		}elseif($pages == 'login'){
			include('pages/login_content.php');
		}elseif($pages == 'blog-list'){
			include('pages/blog_list.php');
		}elseif($pages == 'blog-single'){
			include('pages/blog_single.php');
		}elseif($pages == 'checkout'){
			include('pages/checkout_content.php');
		}elseif($pages == 'shop'){
			include('pages/shop_content.php');
		}elseif($pages == 'product-details'){
			include('pages/product_details.php');
		}elseif($pages == '404'){
			header('pages/404.php');
		}
	}else{
		include('pages/home_content.php');
	}

	?>











	
	<footer id="footer"><!--Footer-->
		<?php include('includes/footer_top.php'); ?>
		
		<?php include('includes/footer_widget.php'); ?>
		
		<?php include('includes/footer_bottom.php'); ?>
		
	</footer><!--/Footer-->
	

  
    <script src="assets/front_end_assets/js/jquery.js"></script>
	<script src="assets/front_end_assets/js/bootstrap.min.js"></script>
	<script src="assets/front_end_assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/front_end_assets/js/price-range.js"></script>
    <script src="assets/front_end_assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/front_end_assets/js/main.js"></script>
</body>
</html>