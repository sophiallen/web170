<?php 
/*
    Template name: basic full-width template. 
*/

get_header(); ?>

<?php get_sidebar(); ?>

<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="post">
            <?php the_post_thumbnail(); ?>

            <nav class="breadcrumb-nav">
                <p><?php if(function_exists('bcn_display') ) {
                    bcn_display();
                } ?></p>
            </nav>

        	<h1><?php the_title(); ?></h1>

            <?php if (get_the_excerpt() ) { ?>
                <h3 class="tagline"> <?php echo get_the_excerpt(); ?> </h3>
            <?php } ?>

            <p><?php the_content(); ?></p>

        </div>
    <?php endwhile; else: ?>
    	<p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>