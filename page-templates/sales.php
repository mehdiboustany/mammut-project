<?php
/* Template Name: Sales Page */
get_header();

  include get_template_directory() . '/template-parts/partials/sales/hero.php';
  include get_template_directory() . '/template-parts/partials/sales/about.php';
  include get_template_directory() . '/template-parts/partials/sales/project.php';
  include get_template_directory() . '/template-parts/partials/home/contact.php';
  include get_template_directory() . '/template-parts/partials/home/client.php';

get_footer();