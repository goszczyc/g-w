<?php
/* Template Name: Aktualności */
get_header();

?>
<main class="main">
<?php get_template_part('/template-parts/banner-main', '' , ['class' => 'banner-main--dark']); ?>
  <?php get_template_part('/template-parts/blog-posts'); ?>
  <?php get_template_part('/template-parts/blog-cards'); ?>
</main>
<?php get_footer(); ?>