<?php
/* Template Name: Kontakt */
get_header();

?>
<main class="main">
  <?php get_template_part('/template-parts/banner-main'); ?>
  <?php get_template_part('/template-parts/contact'); ?>
  <?php get_template_part('/template-parts/specialities', '', ['less' => true]); ?>
  <?php get_template_part('/template-parts/blog-cards'); ?>
</main>
<?php get_footer(); ?>