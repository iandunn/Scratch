			</div> <!-- /#post-container -->
		</div> <!-- /#content-container -->
		
		<div id="footer">
			<p>&copy; 2010 - <?php echo date( 'Y' ); ?> Scratch</p>
		</div> <!-- /#footer -->
	</div> <!-- /#main-container -->
	
	<form id="javaScriptVariables" action="" method="post">
		<p><input type="hidden" id="templateURL" value="<?php echo esc_url( Scratch::$templateURL ); ?>" /></p>
		<p><input type="hidden" id="ajaxPostURL" value="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" /></p>
	</form>
	
	<?php wp_footer(); ?>
</body>
</html>