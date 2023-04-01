<?php
global $paged;
$year = get_query_var('year');
$monthnum = get_query_var('monthnum');

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'order' => 'DSC',
  'paged' => $paged,
  'date_query' => array(
    array(
      'year' => $year,
      'month' => $month
    )
  )
);

$sortedPosts = new WP_Query($args);


get_header();
?>

<main class="main">

  <section class="aside-layout grid-container">
    <div class="aside-layout__menu-background"></div>
    <aside class="aside-layout__menu">
      TEST: <?= $paged; ?>

      <?php
      $arguments = array(
        'type' => 'monthly',
        'post_type' => 'post',
        'format' => 'custom'
      );
      wp_get_archives($arguments)
      ?>

    </aside>

    <?php if ($sortedPosts->have_posts()) : ?>
      <div class="aside-layout__content-background">
        <div class="aside-layout__cards-loader"></div>
      </div>
      <div class="aside-layout__cards container">
        <?php if ($news_heading = get_field('news_heading')) : ?>
          <div class="row">
            <div class="aside-layout__cards-heading">
              <?= $news_heading; ?>
            </div>
          </div>
        <?php endif; ?>
        <div id="blog-cards" class="row">

          <?php while ($sortedPosts->have_posts()) : $sortedPosts->the_post(); ?>

            <a href="<?= esc_url(get_permalink()); ?>" class="aside-layout__card col-12 col-xs-6 col-md-6">
              <div class="aside-layout__card-thumbnail-container">
                <?= get_the_post_thumbnail('', '', ['class' => 'aside-layout__card-thumbnail']); ?>
              </div>
              <div class="aside-layout__card-data">
                <p class="aside-layout__card-author"><?php _e('Author: ', 'gut'); ?><?= get_the_author(); ?></p>
                <h3 class="aside-layout__card-title"><?= get_the_title(); ?></h3>
                <p class="aside-layout__card-excerpt"><?= get_the_excerpt(); ?></p>
                <p class="aside-layout__card-date"><?= get_the_date('d F Y'); ?></p>
              </div>
            </a>

          <?php endwhile; ?>
        </div>
          <div class="row">
            <div class="col-12 pagination-nav">
            <?php pagination_bar($sortedPosts, 'pagination-nav__numbers'); ?>
            </div>
          </div>
      </div>
    <?php endif; ?>

  </section>
</main>

<?php get_footer(); ?>