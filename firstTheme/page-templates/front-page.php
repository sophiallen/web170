<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo("name"); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
</head>
<body>
   <?php wp_nav_menu(array("menu" => "Main Menu")); ?>

	<header>
        <div class="title">
        	<h1><a href="<?php bloginfo("url"); ?>">
    			<?php bloginfo("name"); ?>
            </a></h1>
            <h2><?php bloginfo("description"); ?></h2>
        </title>
    </header>
    
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
</body>
</html>
