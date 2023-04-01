<footer class="footer container">
  <div class="row">
    <div class="footer__info col-12 col-xs-7 col-md-4 col-lg-3">
      <?php if ($header_logo = get_field('logo', 'options')) : ?>
        <?= wp_get_attachment_image($header_logo, 'full'); ?>
      <?php endif; ?>
      <?php if ($contact_address = get_field('contact_address', 'options')) : ?>
        <div class="footer__info-address">
          <?= $contact_address; ?>
        </div>
      <?php endif; ?>

      <?php if ($contact_footer_email = get_field('contact_footer_email', 'options')) : ?>
        <a href="mailto: <?= $contact_footer_email; ?>" class="footer__info-link"><?= $contact_footer_email; ?></a>
      <?php endif; ?>

      <?php if ($contact_phone_page = get_field('contact_phone_page', 'options')) : ?>
        <a href="tel: <?= str_replace(' ', '', $contact_phone_page); ?>" class="footer__info-phone"><?= $contact_phone_page; ?></a>
      <?php endif; ?>
    </div>

    <div class="col-12 col-xs-5 col-sm-4 offset-sm-1 col-md-2 offset-md-2 col-lg-1 offset-lg-5">
      <h3 class="footer__menu-title">
        Menu
      </h3>
      <?php wp_nav_menu($args = array(
        'menu' => 20,
        'menu_class' => 'footer__menu footer__menu--main',
        'container' => false,
      )); ?>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <h3 class="footer__menu-title">
        <?php _e('Specialities', 'gut'); ?>
      </h3>
      <?php wp_nav_menu($args = array(
        'menu' => 21,
        'menu_class' => 'footer__menu',
        'container' => false,
      )); ?>
    </div>
  </div>
  <div class="row justify-content-between">
    <?php if ($footer_copy = get_field('footer_copy', 'options')) : ?>
      <div class="footer__copy">
        <?= $footer_copy; ?>
      </div>
    <?php endif; ?>
    <a href="https://everywhere.pl" class="footer__everywhere"><img src="<?= get_template_directory_uri(); ?>/images/everywhere-logo.svg" alt=""></a>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Cookies -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/cookies/divante.cookies.min.js">
</script>
<script>
  window.jQuery.cookie || document.write(
    '<script src="<?php echo get_template_directory_uri(); ?>/cookies/jquery.cookie.min.js"><\/script>')
</script>
<script>
  jQuery(function($) {
    $.divanteCookies.render({
      privacyPolicy: true,
    });
  });
</script>

</body>

</html>