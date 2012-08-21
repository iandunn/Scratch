<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7]>      <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> <!--<![endif]-->
	
<head>
	<title><?php bloginfo( 'name' ); if( !is_front_page() ) wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Scratch::$templateURL . '/css/main.css'; ?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Scratch::$templateURL . '/css/templates.css'; ?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Scratch::$templateURL . '/css/mobile.css'; ?>" media="all" />

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta name="author" content="Ian Dunn (http://iandunn.name)" />
	<?php wp_head(); ?>
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>
	<div id="main-container">
		<div id="header">
			<a href="<?php echo esc_url( Scratch::$siteURL ); ?>"><img id="logo" src="<?php echo esc_url( Scratch::$templateURL ); ?>/images/header/logo.png" alt="Logo" /></a>
			
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-navigation' ) ); ?>
		</div>
		
		<div id="content-container">
			<div id="post-container">