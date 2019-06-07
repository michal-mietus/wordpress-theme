<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <?php
          $menuParameters = array(
            'theme_location' => 'header-menu',
            'container'       => false,
            'echo'            => false,
            'items_wrap'      => '%3$s',
            'depth'           => 0,
          );
          $menu = wp_nav_menu($menuParameters);
          echo $menu;
        ?>
      </ul>
    </nav>
