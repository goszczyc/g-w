<?php
/* Template Name: Strona Główna */
get_header();

?>
<main class="main">
  <?php get_template_part('/template-parts/banner'); ?>
  <?php get_template_part('/template-parts/about-us-section'); ?>
  <?php get_template_part('/template-parts/specialities', '', ['less' => true]); ?>
  <?php get_template_part('/template-parts/about-us-icons'); ?>
  <?php get_template_part('/template-parts/blog-cards'); ?>
  <?php get_template_part('/template-parts/recruit-section'); ?>
</main>
<?php get_footer(); ?>