<?php
/* Template Name: Blog */
get_header();

?>
<main class="main">
  <?php get_template_part('/template-parts/banner-main'); ?>
  <?php get_template_part('/template-parts/blog-posts'); ?>
  <?php get_template_part('/template-parts/specialities', '', ['less' => true]); ?>
  <?php get_template_part('/template-parts/about-us-icons'); ?>
</main>
<?php get_footer(); ?>