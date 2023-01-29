<?php
/* Template Name: Home Page */
get_header();

  include get_template_directory() . '/template-parts/partials/home/slider.php';
  include get_template_directory() . '/template-parts/partials/home/about.php';
  include get_template_directory() . '/template-parts/partials/home/project.php';
  include get_template_directory() . '/template-parts/partials/home/service.php';
  include get_template_directory() . '/template-parts/partials/home/event.php';
  include get_template_directory() . '/template-parts/partials/home/blog.php';
  include get_template_directory() . '/template-parts/partials/home/contact.php';
  include get_template_directory() . '/template-parts/partials/home/client.php';

get_footer();