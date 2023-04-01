<?php
get_header();

$args = array(
  'exclude' => array(get_the_ID()),
  'orderby' => 'date',
  'order' => 'DSC'
);

$newest_posts = get_posts($args);
?>

<main class="main">
  <?php get_template_part('/template-parts/banner-news'); ?>
  <section class="grid-container aside-layout">
    <div class="aside-layout__menu-background"></div>
    <aside class="aside-layout__menu">
      <h3 class="aside-layout__menu-title"><?php _e('Recent News', 'gut'); ?>:</h3>
      <?php if ($newest_posts) : ?>
        <?php foreach ($newest_posts as $newest_post) : ?>

          <a href="<?= esc_url(get_permalink($newest_post->ID)); ?>" class="aside-layout__menu-item"><?= $newest_post->post_title ?></a>

        <?php endforeach; ?>
      <?php endif; ?>
    </aside>

    <div class="aside-layout__content-background"></div>
    <div class="aside-layout__content">
      <?= get_the_content(); ?>
    </div>
  </section>
  <?php get_template_part('/template-parts/blog-cards', '', ['other_posts' => true]); ?>

</main>

<?php get_footer(); ?>