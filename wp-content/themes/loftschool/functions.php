<?php
function portfolio_picture()
{
  $url = get_the_post_thumbnail_url();
  if (empty($url)) {
    return '/img/content/app.jpg';
  } else {
    return $url;
  }
}

acf_add_options_page();

add_theme_support('menus');