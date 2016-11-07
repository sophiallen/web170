<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo("name"); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once("header.php");?>
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
   <?php include_once("footer.php");?>

</body>
</html>










