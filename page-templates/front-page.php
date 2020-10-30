<?php

/* Front Page Template*/

get_header();
?>
<div class="home">

  <section class="hero-section">
    <div class="hero">
      <img src="<?php bloginfo('template_url')?>/assets/images/Hero2.jpg" alt="Hero Image" class="hero-image">
      <p>Text about the hero image. The more that is written here then the more you will know about our services and why we have a strange looking picture. I don't know why we have it, it's just the thing to do really.</p>
      <button class ="btn-hero"> Hero Button </button>
    </div>
  </section>
<section class="main-page-top-layer">
  <h1>Services</h1>
    <hr class="services-hr-bottom">
<div class="main-column size-small-12 size-medium-6 size-large-3">
        <i class="fas fa-cloud"></i>
          <div class="main-top-content">
  <h2>Cloud Migration</h2>
  </div>
  <p>We offer a range of services to assist in your journey to the cloud, from planning and evaluation through to testing, migration and final delivery.</p>
  <button class ="btn-front-top"> Find out more </button>
</div>
<div class="main-column size-small-12 size-medium-6 size-large-3">
        <i class="fas fa-lock"></i>
        <div class="main-top-content">
  <h2>Cyber Security</h2>
  </div>
  <p>We are able to offer services ranging from vulnerability assessments through to full on managed Anti-Virus and security services</p>
  <button class ="btn-front-top"> Find out more </button>
</div>
<div class="main-column size-small-12 size-medium-6 size-large-3">
        <i class="fas fa-lightbulb"></i>
          <div class="main-top-content">
  <h2>Consultancy</h2>
  </div>
  <p>Utilise our experts with knowledge and experience across a vast array of IT subject matter.</p>
  <button class ="btn-front-top"> Find out more </button>
</div>
<div class="main-column size-small-12 size-medium-6 size-large-3">
    <i class="fas fa-stethoscope"></i>
      <div class="main-top-content">
  <h2>Managed IT Support</h2>
  </div>
  <p>We offer a variety of support packages customisable to your needs.</p>
    <button class ="btn-front-top"> Find out more </button>
</div>
</section>

<section class="main-page-middle-layer">
</section>

<section class="main-page-bottom-layer">
    <h1>Services</h1>
  <div class="main-column size-small-12 size-medium-6 size-large-4">
      <i class="fas fa-poo-storm fa-large-4"></i>
    <h2>Some Text</h2>
    <p>TopRow1TopRow1TopRow1 TopRow1TopRow1TopRow1 TopRow1TopRow1TopRow1</p>
    <button class ="btn-front-bottom"> Testing </button>
  </div>
  <div class="main-column size-small-12 size-medium-6 size-large-4">
      <i class="fas fa-briefcase fa-large-4"></i>
    <h2>Some Text 2</h2>
    <p>TopRow2TopRow2TopRow2 TopRow2TopRow2TopRow2 TopRow2TopRow2TopRow2</p>
    <button class ="btn-front-bottom"> Testing </button>
  </div>
  <div class="main-column size-small-12 size-medium-6 size-large-4">
      <i class="fas fa-users-cog fa-large-4"></i>
    <h2>Some Text 3</h2>
    <p>TopRow3TopRow3TopRow3 TopRow3TopRow3TopRow3 TopRow3TopRow3TopRow3</p>
    <button class ="btn-front-bottom"> Testing </button>
  </div>
</section>
</div>



<?php get_footer(); ?>
