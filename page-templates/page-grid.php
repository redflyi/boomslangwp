<?php
/* Template Name: Grid Layout Page Template */

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

      <section class="hero-section">
        <div class="hero">
          <img src="<?php bloginfo('template_url')?>/assets/images/Hero2.jpg" alt="Hero Image" class="hero-image">
          <p>Here at Boomslang Consultants we are happy to be partnered with some leading and globally recognised companies, with whom we have gained the trust to provide specific services. Please see below for more information on our partners.</p>
          <button class ="btn-hero"> Hero Button </button>
        </div>
      </section>

       <div class ="main-page-top-layer">
      	<div class="item size-large-3 size-medium-6">
      <div class="flip-container-partner">
              <div class="card-partner">
                   <a href ="http://localhost/boomslang/microsoft/"><div class="front-partner">
                      <p style="font-size:30px;color:#FFFFFF;">More <i class="fas fa-chevron-right"></i></p>
                  </div></a>
                  <div class="back-partner">
                     <img src="http://localhost/boomslang/wp-content/uploads/2019/07/Microsoft_Front_200.png" alt="Microsoft"/>
                  </div>
              </div>
          </div>
      </div>
      	<div class="item size-large-3 size-medium-6" style="background:#000000;">

       <div class="flip-container-partner"><div class="card-partner">
                  <a href ="http://localhost/boomslang/mcafee/"><div class="front-partner">
                      <p style="font-size:30px;color:#FFFFFF;">More <i class="fas fa-chevron-right"></i></p>
                  </div></a>
                  <div class="back-partner">
                    <img src="http://localhost/boomslang/wp-content/uploads/2019/08/McAFEE_Front_200_white.png" alt="McAFEE" />
                  </div>
              </div>
          </div>

      </div>
      	<div class="item size-large-3 size-medium-6" style="background:red;">
       <div class="flip-container-partner"><div class="card-partner">
                  <a href ="http://localhost/boomslang/citrix/"><div class="front-partner">
                      <p style="font-size:30px;color:#FFFFFF;">More <i class="fas fa-chevron-right"></i></p>
                  </div></a>
                  <div class="back-partner">
                    <img src="http://localhost/boomslang/wp-content/uploads/2019/07/Citrix_Front_200.png" alt="Citrix" />
                  </div>
              </div>
          </div>
      </div>
      	<div class="item size-large-3 size-medium-6">
        <div class="flip-container-partner"><div class="card-partner">
                  <a href ="http://localhost/boomslang/vmware/"><div class="front-partner">
                      <p style="font-size:30px;color:#FFFFFF;">More <i class="fas fa-chevron-right"></i></p>
                  </div></a>
                  <div class="back-partner">
      <img src="http://localhost/boomslang/wp-content/uploads/2019/07/VMware_Front_200.png" alt="VMware"/>
                  </div>
              </div>
          </div></div>

      </div>
      <?php
      while ( have_posts() ) :
        the_post();
        ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php comments_template( '', true ); ?>
      <?php endwhile; // End of the loop. ?>

    <?php get_footer(); ?>
