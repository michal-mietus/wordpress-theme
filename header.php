<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
  </head>
  <body>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
