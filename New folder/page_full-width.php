<?php
/* Template Name: Full-width-template */

get_header();

 ?>

<div class="main-content-width-wrapper">
    <div class="full-width-entry">
        <h1><?php echo get_the_title() ?></h1>

        <main class="main-content">
          <?php
            // Start the Loop
            if (have_posts()) :
                while (have_posts()) :
                            the_post();
                                the_content();
                endwhile;
            endif;
          ?>
        </main>
    </div>
</div>

<?php get_footer() ?>
