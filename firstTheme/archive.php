<?php 

/*
	Template for the archives page. 
*/

get_header(); ?>

<?php get_sidebar(); ?>

<main>
	<h2>
		<?php 
			// Display what type of archive organization is being viewed.
			if (is_day() )
				_e('Archives by Day: '.get_the_date());
			elseif (is_month())
				_e('Archives by Month: '.get_the_date(' F Y'));
			elseif (is_year())
				_e('Archives by Year: '.get_the_date('Y'));
			elseif (is_author())
				_e('Archives by Author');
			else 
				_e('Archives by Category: '.single_cat_title('', false));	
		?>
	</h2>	
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
		<p><?php e_('Archives could not be retrieved.'); ?></p>
	<?php endif; ?>

</main>

<?php get_footer(); ?>