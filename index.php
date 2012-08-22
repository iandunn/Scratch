<?php get_header(); ?>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'loop', 'default' ); ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php get_template_part( 'loop', 'no-posts-found' ); ?>
<?php endif; ?>


<?php if( is_single() ) : ?>
	<?php comments_template( '', true ); ?>
<?php endif; ?>


<?php if( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts <span class="meta-nav">&rarr;</span>' ); ?></div>
	</div><!-- #nav-below -->
<?php endif; ?>

<?php get_footer(); ?>