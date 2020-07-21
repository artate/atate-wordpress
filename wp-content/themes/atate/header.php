<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-4.6.1/css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Rubik:400,500" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
 
	<div class="wrap">
		<header>
	        <div class="header-inner">
	            <div class="container">
	                <div class="row">
	                    <div class="col-6">
	                        <a href="/"><img class="logo" src="/wp-content/themes/atate/assets/img/atate-logo-clear.png" alt="<?php bloginfo('name'); ?>" /></a>
	                    </div>
	                    <div class="col-6">
	                        <div class="menu-ros" onclick="hideNav()"></div>
							<div class="mob-menu">
								<i class="fa fa-bars"></i>
							</div>
							<div class="main-nav">
								<i class="fa fa-times" onclick="hideNav();"></i>
	                        	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							</div>
	                    </div>
	                </div>
	            </div>
	        </div>
    	</header>