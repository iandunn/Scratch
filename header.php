<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7]>      <html xmlns="http://www.w3.org/1999/xhtml" <?php echo Scratch::$languageAttributes; ?> class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html xmlns="http://www.w3.org/1999/xhtml" <?php echo Scratch::$languageAttributes; ?> class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html xmlns="http://www.w3.org/1999/xhtml" <?php echo Scratch::$languageAttributes; ?> class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" <?php echo Scratch::$languageAttributes; ?>> <!--<![endif]-->
	
<head>
	<title>
		<?php esc_html_e( get_bloginfo( 'name' ) );
		
		if( !is_front_page() )
			esc_html_e( wp_title() ); ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( Scratch::$templateURL ) . '/css/main.css'; ?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( Scratch::$templateURL ) . '/css/templates.css'; ?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( Scratch::$templateURL ) . '/css/mobile.css'; ?>" media="all" />

	<meta http-equiv="Content-Type" content="<?php esc_attr_e( get_bloginfo( 'html_type' ) ); ?>; charset=<?php esc_attr_e( get_bloginfo( 'charset' ) ); ?>" />
	<meta name="description" content="<?php esc_attr_e( get_bloginfo( 'description' ) ); ?>" />
	<meta name="author" content="Ian Dunn (http://iandunn.name)" />
	
	<?php wp_head(); ?>
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>
	<div id="main-container">
		<div id="header">
			<a href="<?php echo esc_url( Scratch::$siteURL ); ?>"><img id="logo" src="<?php echo esc_url( Scratch::$templateURL ); ?>/images/header/logo.png" alt="Logo" /></a>
			
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-navigation' ) ); ?>
		</div> <!-- /#header -->
		
		<div id="content-container">
			<div id="post-container">