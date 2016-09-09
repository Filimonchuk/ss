<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<title>Smart Solution</title>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>

<body>
<header class="header">
	<div class="logo"><a href="<?php home_url(); ?>">
			<img class="img_logo" src="<?php bloginfo('template_url'); ?>/images/logo_smartsolution.svg" alt="Логотип компании Smart Solution"></a>
	</div>
	<nav class="header_nav">
		<ul class="nav nav-pills header_nav_menu">
			<li><a href="index_security.html">Категории</a>
			<li><a href="index_product.html">Доставка и оплата</a>
			<li><a href="#">О магазине</a>
		</ul>
	</nav>
	<div class="currency">
		<ul class="nav nav-pills menu_currency">
			<li><a href="#">&#36;</a>
			<li><a href="#">&euro;</a>
			<li><a href="#">&#8372;</a>
		</ul>
	</div>
	<div class="user_corner">
		<div class="wr_search_tel">
			<form class="search"><input type="text"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></form>
			<div class="wr_tel_menu">
				<div class="tel">
					<a href="tel:+380444567898">044 456-78-98</a>
					<a href="tel:+380506785687">050 678-56-87</a>
				</div>
				<div class="menu_mobile"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>
			</div>
		</div>
		<div class="wr_cart_feedback">
			<div class="cart">
				<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
				<p><span>0</span> товаров</p>
			</div>
			<div class="feedback">
				<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
				<p>Обратный звонок</p>
			</div>
		</div>
	</div>
</header>