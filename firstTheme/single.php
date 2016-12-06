/**
 * Template for displaying single blog post
 */

<?php get_header(); ?>

<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
	<div class="single-post">
		<?php the_post_thumbnail(); ?>
		<?php the_title(); ?>

		<!-- Metadata -->
		<p>
			<em>
			Posted <time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"> <?php the_time('M n'); ?></time>
			| <?php comments_number('no comments', '1', '% comments'); ?>
			</em>
		</p>
		
		<?php the_content(); ?>

		<div class="post-footer">
			<p>Categories: <?php the_category(', '); ?></p>
			<?php if(get_the_tags()) { ?>
				<p>Tags: <span> <?php the_tags(); ?></span> </p>
			<?php }?>
		</div>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( "The post you're lookig for could not be found. "); ?></p>
<?php endif ?>

<?php 
get_sidebar();
get_footer();
?>

