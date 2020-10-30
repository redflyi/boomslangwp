<?php
/* Template Name: Contact Page Template */

get_header();
 ?>

 <div id="content" role="main">
   <section class="hero-section">
     <div id="particles-js" style="background-image: url('<?php bloginfo('template_url') ?>/assets/images/Contact_hue1.png')">
       <p>Here at Boomslang Consultants we like to talk and we like to help. So please get in touch and let’s start a conversation</p>
       <button class ="btn-hero"> Hero Button </button>
     </div>
   </section>

<section class= "main-contact-form">
   <div class="column1contact">
     <p>If you are looking for expert advice, IT support, an IT solution or just want to reach out to us, then fill in the form below as we would love to hear from you.</p><br>
     <p>We aim to respond to all queries within 4 hours</p>
      <?php echo do_shortcode("[contact-form-7 id='55' title='Main']"); ?></div>
   <div class="column2contact">
     <div class="contactgrid1"><h2>Call Us Today:<h2>
     </div>
     <hr>
       <div class="contactgrid2">
         <p>Tel: 01206 266940</p>
         <p>Tel: 01206 580131</p>
       </div>

    </div>
 </section>
</div>




 <?php get_footer(); ?>
