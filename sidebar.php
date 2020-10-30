<?php
/* The template for sidebar*/
?>

<?php

if ( is_active_sidebar('boomslang-footer-widget')) : ?>
        <aside class="sidebar widget area">
            <?php dynamic_sidebar ('boomslang-footer-widget'); ?>
        </aside>
      <?php endif; ?>
