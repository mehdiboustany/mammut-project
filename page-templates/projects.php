<?php
/* Template Name: Projects Page */
get_header();

  include get_template_directory() . '/template-parts/partials/projects/hero.php';
  include get_template_directory() . '/template-parts/partials/projects/about.php';
  include get_template_directory() . '/template-parts/partials/projects/gallery.php';
  include get_template_directory() . '/template-parts/partials/projects/des.php';
  include get_template_directory() . '/template-parts/partials/home/contact.php';
  include get_template_directory() . '/template-parts/partials/home/client.php';

get_footer();