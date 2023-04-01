<?php
$currId = get_the_ID();
$other_posts = isset($args['other_posts']) ? $args['other_posts'] : false;
$blog_cards_heading = get_field('blog_cards_heading', 'options');
if ($other_posts) $blog_cards_heading = get_field('blog_other_heading', 'options');
$i = 0;
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'order' => 'DSC',
  'paged' => $paged
);

$blog_cards = new WP_Query($args);

if ($blog_cards->have_posts()) : ?>

  <section class="blog-cards container">

    <?php if ($blog_cards_heading) : ?>

      <div class="row">
        <div class="blog-cards__heading col-12">
          <?= $blog_cards_heading; ?>
        </div>
      </div>

    <?php endif; ?>

    <div class="row">

      <?php while (($blog_cards->have_posts()) && ($i < 3)) : $blog_cards->the_post(); ?>

        <?php if ($currId != get_the_ID()) : ?>

          <a href="<?= esc_url(get_permalink()); ?>" class="blog-cards__card col-12 col-xs-6 col-md-4">
            <div class="blog-cards__card-thumbnail-container">
              <?= get_the_post_thumbnail('', '', ['class' => 'blog-cards__card-thumbnail']); ?>
            </div>
            <div class="blog-cards__card-data">
              <p class="blog-cards__card-author"><?php _e('Author: ', 'gut'); ?><?= get_the_author(); ?></p>
              <h3 class="blog-cards__card-title"><?= get_the_title(); ?></h3>
              <p class="blog-cards__card-excerpt"><?= get_the_excerpt(); ?></p>
              <p class="blog-cards__card-date"><?= get_the_date('d F Y'); ?></p>
            </div>
          </a>

        <?php $i++;
        endif; ?>

      <?php endwhile; ?>

      <?php if ($blog_link = get_field('blog_link', 'options')) : ?>
        <div class="col-12 d-flex justify-content-center">
          <a href="<?= esc_url($blog_link['url']); ?>" class="btn btn--primary"><?= $blog_link['title']; ?></a>
        </div>
      <?php endif; ?>

    </div>
  </section>

<?php endif; ?>