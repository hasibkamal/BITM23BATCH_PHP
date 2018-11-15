<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="assets/front_end_asstes/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/front_end_asstes/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/front_end_asstes/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/front_end_asstes/css/price-range.css" rel="stylesheet">
    <link href="assets/front_end_asstes/css/animate.css" rel="stylesheet">
	<link href="assets/front_end_asstes/css/main.css" rel="stylesheet">
	<link href="assets/front_end_asstes/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/front_end_asstes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/front_end_asstes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/front_end_asstes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/front_end_asstes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/front_end_asstes/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php include './includes/header_top.php'; ?>
		
		<?php include './includes/header_middle.php'; ?>
	
		<?php include './includes/header_bottom.php'; ?>
	</header><!--/header-->
	
	<?php 
        if(isset($page)){
            if($page == 'contact'){
                include './pages/contact_us_content.php';
            }elseif($page == '404'){
                include './pages/404_content.php';
            }
        }else{
            include './pages/home_content.php';
        }
        
        
        ?>
	
	<footer id="footer"><!--Footer-->
		<?php include './includes/footer_top.php'; ?>
		<?php include './includes/footer_widget.php'; ?>
		<?php include './includes/footer_bottom.php'; ?>
		
		
		
		
		
	</footer><!--/Footer-->
	

  
    <script src="assets/front_end_asstes/js/jquery.js"></script>
	<script src="assets/front_end_asstes/js/bootstrap.min.js"></script>
	<script src="assets/front_end_asstes/js/jquery.scrollUp.min.js"></script>
	<script src="assets/front_end_asstes/js/price-range.js"></script>
    <script src="assets/front_end_asstes/js/jquery.prettyPhoto.js"></script>
    <script src="assets/front_end_asstes/js/main.js"></script>
</body>
</html>