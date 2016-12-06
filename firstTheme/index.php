<!DOCTYPE html>
<html>

    <?php get_header(); ?>
    <?php get_sidebar(); ?>
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="post">
            	<h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; else: ?>
        	<p>Sorry you don't have posts :(</p>
        <?php endif; ?>
    </main>
    
   <?php get_footer();?>

</body>
</html>










