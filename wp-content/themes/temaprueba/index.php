<!DOCTYPE html>
<?php get_header(); ?>

        <p><h1>Hello to my web </h1></p>
        <h1>Menu</h1>
        <?php wp_nav_menu(array('menu'=>'menu2'));?>
        <?php 
        if (have_posts()) {
         while (have_posts()) {
            the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
            <?php the_content();
         }
        }
        
       ?>
       
        <?php get_sidebar();?>
        <?php get_footer();?>
 
