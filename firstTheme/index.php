
    <?php get_header(); ?>
    <?php get_sidebar(); ?>
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="post">
            	<h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; else: ?>
        	<p>Sorry, no posts were found.</p>
        <?php endif; ?>
    </main>
    
   <?php get_footer();?>

</body>
</html>










