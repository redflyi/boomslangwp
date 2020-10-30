<?php
/*Main Template File*/

get_header();

 ?>


        <!--<h1><?php echo get_the_title() ?></h1>-->
 <div id="content" role="main">

          <section class="hero-section">
            <div id="particles-js" style="background-image: url('<?php bloginfo('template_url') ?>/assets/images/<?php echo get_the_title() ?>.png')">
              <button class ="btn-hero"> Read More</button>
            </div>
            </section>
          <?php
            // Start the Loop
            if (have_posts()) :
                while (have_posts()) :
                            the_post();
                                the_content();
                endwhile;
            endif;
          ?>
    </div>


<?php get_footer() ?>
