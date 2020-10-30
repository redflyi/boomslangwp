<?php /* Main Header */
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="<?php bloginfo('template_url')?>/style.css" type="text/css" rel=stylesheet>
  <script src="https://kit.fontawesome.com/2620af5a58.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>

  <body>
<header class="header">
  <section class="header-top">
  <div class="logo-placeholder">
  <a href="index.html"><img src="<?php bloginfo('template_url')?>/assets/images/Logo.png" alt="" class="logo"></a>
</div>
<div class = "text-placeholder">
  <div class ="social-placeholder">
    <ul class="social">
      <li><a href="https://linkedin.com/company/boomslang-consultants"><img src="<?php bloginfo('template_url')?>/assets/images/linkedin.png" alt="LinkedIn"></a></li>
      <li><a href="https://www.facebook.com/BoomslangLtd"><img src="<?php bloginfo('template_url')?>/assets/images/facebook.png" alt="Facebook"></a></li>
      <li><a href="https://twitter.com/BoomslangCo"><img src="<?php bloginfo('template_url')?>/assets/images/twitter.png" alt="Twitter"></a></li>
    </ul>
</div>
  <div class = "support-placeholder">
  <p>Support: 01206 555555</p>
  <p>E-mail: Support@BoomslangConsultants.com</p>
</div>
</div>
</section>
<nav class="nav-container">
              <a class="hamburgerBtn" href="#">&#9776;</a>
              <a class="closebtn" href="#">&times;</a>
    <?php
      wp_nav_menu( $arg =array (
                'menu_class' => 'main-navigation',
                'theme_location' => 'primary'
      ));
    ?>


  </nav>

<?php /*
  <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle">Menu</button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</nav>*/
?>
<?php /*
<div id="toggle">
<img src="<?php bloginfo('template_url')?>/assets/images/Hamburger.png" alt="Show" /></div>
<div id="popout">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</div>*/
?>
</header>
