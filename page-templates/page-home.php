<?php
/* Template Name: Home Page Template */

get_header();
 ?>

 <div id="content" role="main">

   <?php
   while ( have_posts() ) :
     the_post();
     ?>
     <?php get_template_part( 'content', 'page' ); ?>
     <?php comments_template( '', true ); ?>
   <?php endwhile; // End of the loop. ?>

 <?php get_footer(); ?>
