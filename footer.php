<?php ?>

<footer class="footer">
  <div class ="footer-row">
    <div class = "footer-column size-small-12 size-medium-6 size-large-3">
<nav>
  <h2>Menu</h2>
      <?php
        wp_nav_menu( $arg =array (
                  'menu_class' => 'footer-navigation',
                  'theme_location' => 'footer1'
        ));
      ?>
    </nav>
    </div><!-- end of column -->
    <div class = "footer-column size-small-12 size-medium-6 size-large-3">
<!--<nav>
    <?php
      //  wp_nav_menu( $arg =array (
      //            'menu_class' => 'footer-navigation',
      //            'theme_location' => 'footer2'
      //  ));
      ?>
    </nav><!-- end of column -->

    <h2>About</h2>
    <p>Office 11,<br>
    Colchester Business Center,<br>
    Hawkins Road,<br>
    Colchester,<br>
    Essex,<br>
    CO4 5UR</p>
    </div>
    <div class = "footer-column size-small-12 size-medium-6 size-large-3">
<nav>
<?php get_sidebar('boomslang-footer-widget');?>
    </nav>
    </div>
  </div><!-- end of row -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
