<section class="recruitment">
  <div class="container">
    <div class="row">
      <div class="recruitment__content col-12 col-sm-6 col-lg-7">
        <?= get_the_content(); ?>
        <?php if ($recruitment_email = get_field('recruitment_email')) : ?>
          <a href="mailto: <?= $recruitment_email; ?>" class="recruitment__content-email">
            <?= $recruitment_email; ?>
          </a>
        <?php endif; ?>
      </div>
      <?php if ($recuitment_image = get_field('recruitment_image')) : ?>
        <div class="recruitment__image col-12 col-sm-6 offset-md-1 col-md-5 col-lg-4">
          <?= wp_get_attachment_image($recuitment_image, 'full'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>