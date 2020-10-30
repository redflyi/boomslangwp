<?php
/* Template Name: News/Blog Page Template */

get_header();
 ?>

 <div id="content" role="main">
   <section class="hero-section">
     <div id="particles-js" style="background-image: url('<?php bloginfo('template_url') ?>/assets/images/news.png')">
       <p>Let’s Start a Conversation</p>
       <button class ="btn-hero"> Hero Button </button>
     </div>
   </section>

<section class= "Posts">

    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-page-image">
          <?php the_post_thumbnail(); ?>
        </div><!-- .entry-page-image -->
      <?php endif; ?>

      <?php get_template_part( 'content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

 </section>
</div>




 <?php get_footer(); ?>
