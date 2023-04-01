<?php
function sortBlogPosts()
{
  $year = intval($_POST['setYear']);
  $month = intval($_POST['setMonth']);
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'order' => 'DSC',
    'date_query' => array(
      array(
        'year' => $year,
        'month' => $month
      )
    )
  );

  $sortedBlog = new WP_Query($args);

?>
  <?php if ($sortedBlog->have_posts()) : ?>
    <?php while ($sortedBlog->have_posts()) : $sortedBlog->the_post(); ?>

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
  <?php endif; ?>


<?php
  die;
}

add_action('wp_ajax_sortBlogPosts', 'sortBlogPosts');
add_action('wp_ajax_nopriv_sortBlogPosts', 'sortBlogPosts');
