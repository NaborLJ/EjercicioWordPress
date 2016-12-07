<!DOCTYPE html>
<?php get_header(); ?>
<div id="index"> 
        <p><h1>Hello to my web </h1></p>
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
</div>       
        <?php get_sidebar();?>
        <?php get_footer();?>
 
