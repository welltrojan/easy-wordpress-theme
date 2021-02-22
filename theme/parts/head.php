<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title><?php wp_title();?></title>
	<?php wp_head();?>

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon.png"/>

	<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/c52cdfa652.js" crossorigin="anonymous"></script>
	<!-- Owl Carousel Style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style/css/owl.carousel.min.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style/css/style.css">

</head>
<body <?php body_class();?>>
