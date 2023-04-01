<section class="contact grid-container">

  <?php if ($contact_heading = get_field('contact_heading')) : ?>
    <div class="contact__heading">
      <?= $contact_heading; ?>
    </div>
  <?php endif; ?>

    <div class="contact__info">

        <?php if ($contact_info_heading = get_field('contact_info_heading', 'options')) : ?>
          <h3 class="contact__info-heading">
            <?= $contact_info_heading; ?>
          </h3>
        <?php endif; ?>

        <?php if ($contact_address = get_field('contact_address', 'options')) : ?>
          <div class="contact__info-address">
            <?= $contact_address; ?>
          </div>
        <?php endif; ?>

        <?php if ($contact_mapLink = get_field('contact_mapLink', 'options')) : ?>
          <a href="<?= esc_url($contact_mapLink['url']); ?>" target="_blank" class="contact__info-link">
            <?= $contact_mapLink['title']; ?>
          </a>
        <?php endif; ?>

        <?php if ($contact_phone_page = get_field('contact_phone_page', 'options')) : ?>
          <a href="tel: <?= str_replace(' ', '', $contact_phone_page); ?>" class="contact__info-phone"><?= $contact_phone_page; ?></a>
        <?php endif; ?>

        <?php if ($contact_email = get_field('contact_email', 'options')) : ?>
          <a href="mailto: <?= $contact_email; ?>" class="contact__info-link"><?= $contact_email; ?></a>
        <?php endif; ?>


    </div>

  <div class="contact__form">
    <?= do_shortcode('[contact-form-7 id="86" title="Formularz kontaktowy"]'); ?>
  </div>

  <?php if ($contact_photo = get_field('contact_photo')) : ?>
    <div class="contact__photo">
      <?= wp_get_attachment_image($contact_photo, 'full') ?>
    </div>
  <?php endif; ?>

</section>