<!-- Template for displaying single posts -->
<?php get_header(); ?>
<?php get_sidebar(); ?>

<main>
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
	<div class="single-post">
		<?php the_post_thumbnail(); ?>
		<h2><?php the_title(); ?></h2>

		<!-- Metadata -->
		<p>
			<small>
			Posted <time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"> <?php the_time('M n'); ?></time>
			| <?php comments_number('no comments', '1', '% comments'); ?>
			</small>
		</p>
		
		<?php the_content(); ?>

		<div class="post-footer">
			<p>Categories: <?php the_category(', '); ?></p>
			<?php if(get_the_tags()) { ?>
				<p>Tags: <span> <?php the_tags(); ?></span> </p>
			<?php }?>
			<ul>
				<?php previous_post_link('<li>%link</li>'), "< Previous Post" ?>
				<?php next_post_link('<li>%link</li>'), "Next Post >" ?>
			</ul>
		</div>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( "The post you're lookig for could not be found. "); ?></p>
<?php endif ?>
</main>

<?php get_footer();?>

