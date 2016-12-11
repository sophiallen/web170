<?php 
/*
	Displays search results. 
*/

	get_header();
	get_sidebar();
?>
<main>
	<h2><?php _e('Search results for: '.get_search_query()); ?></h2>
	<?php get_search_form(); ?>
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<p><?php $pid = get_the_ID(); ?></p>
		<h3><a href="<?php echo 'index.php?p='.$pid; ?>"><?php the_title(); ?></a></h3>
		<span><em><?php the_date(); ?></em></span>
		<?php if (get_the_excerpt() ) { ?>
            <p class="tagline"> <?php echo get_the_excerpt(); ?> </p>
        <?php }?>
	<?php endwhile; ?>
	<?php else : ?>
		<p><?php echo 'Sorry, your search returned no results.'; ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>