<?php

if( !class_exists( 'Scratch' ) )
{
	/**
	 * Misc methods and properties used by the theme
	 * @author Ian Dunn <ian@iandunn.name>
	 */
	class Scratch
	{
		public static $siteURL, $templateURL;
		protected static $version = 0.1;
		
		/**
		 * Registers callbacks for actions, filters, etc
		 * @author Ian Dunn <ian@iandunn.name>
		 */
		public static function registerCallbacks()
		{
			add_action( 'after_setup_theme',	__CLASS__ . '::init' );
			add_action( 'template_redirect',	__CLASS__ . '::assignVars' );
			add_action( 'wp_enqueue_scripts',	__CLASS__ . '::loadResources' );
		}
		
		/**
		 * Performs initialization
		 * @author Ian Dunn <ian@iandunn.name>
		 */
		public static function init()
		{
			if( is_admin() )
			{
				register_nav_menu( 'main-navigation', 'Main Navigation' );
			}
			
			add_theme_support( 'post-thumbnails' );
		}
		
		/**
		 * Assigns values to variables needed throughout the theme
		 * @author Ian Dunn <ian@iandunn.name>
		 */
		public static function assignVars()
		{
			self::$siteURL		= site_url();
			self::$templateURL	= get_bloginfo('template_url');
		}
		
		/**
		 * Loads the required JavaScript and CSS files
		 * @author Ian Dunn <ian@iandunn.name>
		 */
		public static function loadResources()
		{
			wp_register_script(
				'Scratch',
				self::$templateURL . '/js/scratch.js',
				array( 'jquery' ),
				self::$version,
				true
			);
			
			if( !is_admin() )
			{
				wp_enqueue_script( 'Scratch' );
			}
		}
	} // end Scratch
	
	Scratch::registerCallbacks();
}

?>