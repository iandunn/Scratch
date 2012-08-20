			</div> <!-- /#post-container -->
		</div> <!-- /#content-container -->
		
		<div id="footer">
			<p>copy; 2010 - <?php echo date( 'Y' ); ?> Scratch</p>
		</div>
	</div> <!-- /#main-container -->
	
	<form action="" method="post">
		<p><input type="hidden" id="templateURL" value="<?php echo Scratch::$templateURL; ?>" /></p>
		<p><input type="hidden" id="ajaxPostURL" value="<?php echo admin_url( 'admin-ajax.php' ); ?>" /></p>
	</form>
	
	<?php wp_footer(); ?>
</body>
</html>