<?php
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menus(array(
    'header-menu' => __('Header Menu')
  ));
}
add_action('after_setup_theme', 'my_theme_setup');
