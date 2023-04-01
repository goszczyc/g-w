<?php
$less = isset($args['less']) ? $args['less'] : false;
$other = isset($args['other']) ? $args['other'] : false;
$heading_class = '';
$specialities_heading = get_field('specialities_heading');
$current_id = get_the_ID();
$i = 0;

$args = array(
  'post_type' => 'specialities',
  'posts_per_page' => -1,
);

if ($less) {
  $heading_class = 'specialities__heading--secondary';
  $specialities_heading = get_field('specialities_unversal_heading', 'options');
  $args = array(
    'post_type' => 'specialities',
    'posts_per_page' => 3,
  );
}
if ($other) {
  $specialities_heading = $specialities_heading = get_field('specialities_other_heading', 'options');
  $args = array(
    'post_type' => 'specialities',
    'posts_per_page' => -1,
  );
}

$specialities = new WP_Query($args);
?>

<?php if ($specialities->have_posts()) : ?>
  <section class="specialities">
    <div class="container">
      <div class="row">

        <?php if ($specialities_heading) : ?>

          <div class="specialities__heading <?= $heading_class; ?> col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
            <?= $specialities_heading; ?>
          </div>

        <?php endif; ?>

        <?php while (($specialities->have_posts()) && ($i < 3)) : $specialities->the_post(); ?>

          <?php if ($current_id != get_the_ID()) : ?>

            <div class="specialities__cards col-12 col-sm-6 col-lg-4">
              <div class="specialities__card">
                <?= get_the_post_thumbnail('', 'specialities-card', ['class' => 'specialities__card-thumbnail']); ?>
                <div class="specialities__card-content">
                  <h3 class="specialities__card-title"><?= get_the_title(); ?></h3>
                  <p class="specialities__card-excerpt"><?= get_the_excerpt(); ?></p>
                  <a href="<?= esc_url(get_permalink()); ?>" class="specialities__card-link link link--secondary"><?php _e('Learn more', 'gut'); ?></a>
                </div>
              </div>
            </div>

            <?php if ($other) $i++; ?>

          <?php endif; ?>

        <?php endwhile; ?>

        <?php if ($less) : ?>
          <?php if ($full_offer_link = get_field('full_offer_link', 'options')) : ?>
            <div class="col-12 d-flex justify-content-center">
              <a href="<?= esc_url($full_offer_link['url']); ?>" class="btn btn--primary"><?= $full_offer_link['title']; ?></a>
            </div>
          <?php endif; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>
<?php endif; ?>