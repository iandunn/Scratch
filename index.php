<?php

get_header();

if( have_posts() )
{
	while( have_posts() )
	{
		the_post();
		get_template_part( 'loop', 'default' );
	}
}
else
	get_template_part( 'loop', 'no-posts-found' );

if( is_single() )
	comments_template( '', true );

?>

<?php if( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts <span class="meta-nav">&rarr;</span>' ); ?></div>
	</div><!-- #nav-below -->
<?php endif; ?>

<?php get_footer(); ?>