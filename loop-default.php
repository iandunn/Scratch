<div class="loop-post">
	<div class="post-meta">
	</div>
	
	<div class="post-content">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		
		<?php if( is_singular() ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
	</div>
</div> <!-- /.loop-post -->