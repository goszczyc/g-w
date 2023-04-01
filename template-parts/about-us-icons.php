<div class="about-attributes container">

  <?php if ($about_attributes_heading = get_field('about_attributes_heading', 'options')) : ?>

    <div class="about-attributes__heading">
      <?= $about_attributes_heading; ?>
    </div>

  <?php endif; ?>

  <?php if (have_rows('about_attributes_icons', 'options')) : ?>
    <div class="about-attributes__icons-slider container">

      <?php while (have_rows('about_attributes_icons', 'options')) : the_row(); ?>
        <?php if (($icon = get_sub_field('icon')) && ($attribute = get_sub_field('attribute'))) : ?>

          <div>
            <div class="about-attributes__attribute">
              <?= wp_get_attachment_image($icon, 'full', '', ['class' => 'about-attributes__attribute-icon']); ?>
              <h3 class="about-attributes__attribute-title">
                <?= $attribute; ?>
              </h3>
            </div>
          </div>

        <?php endif; ?>
      <?php endwhile; ?>

    </div>
  <?php endif; ?>

</div>