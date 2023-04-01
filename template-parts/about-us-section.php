<section class="about-us container">
  <div class="row">

    <?php if ($about_us_photo = get_field('about_us_photo', 47)) : ?>

      <div class="about-us__image col-10 offset-1 col-sm-5 col-lg-4 offset-lg-1">
        <?= wp_get_attachment_image($about_us_photo, 'full'); ?>
      </div>

    <?php endif; ?>

    <div class="about-us__content col-12 col-xs-10 offset-xs-1 col-sm-6 offset-sm-0 col-md-6 offset-md-0 col-lg-6">

      <?php if ($about_us_heading = get_field('about_us_heading')) : ?>

        <h2 class="about-us__heading">
          <?= $about_us_heading; ?>
        </h2>

      <?php endif; ?>

      <?php if ($about_us_text = get_field('about_us_text', 47)) : ?>

        <div class="about-us__text">
          <?= $about_us_text; ?>

          <?php if (($about_us_link = get_field('about_us_link', 47)) && (get_the_ID() != 47)) :
            $url = $about_us_link['url'];
            $title = $about_us_link['title'];
          ?>
            <a href="<?= esc_url($url); ?>" class="about-us__link link"><?= $title; ?></a>
          <?php endif; ?>

        </div>

      <?php endif; ?>

    </div>
  </div>
</section>