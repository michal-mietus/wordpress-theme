<?php
function register_menu() {
  register_nav_menu(
    array(
      'header-menu' => __('Header Menu'),
    )
  );
}

add_action('init', 'register_menu');
?>
