<?php get_header();?>
<br/>
Este artículo fue publicado el <?php the_time('l, F jS, Y') ?> a la(s) <?php the_time() ?>
<br/>
<?php edit_post_link('Edit this entry.','',''); ?>
<?php wp_nav_menu(array('menu'=>'menu1'));?>

