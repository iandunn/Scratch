<?php get_header(); ?>

<?php if( have_posts() ) : ?>
	
	<h1>Search Results for: <?php echo get_search_query(); ?></h1>

	<?php while( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'loop', 'default' ); ?>
	<?php endwhile; ?>

<?php else : ?>

	<h2>Nothing Found for: <?php echo get_search_query(); ?></h2>	
	
<?php endif; ?>

<?php get_footer(); ?>