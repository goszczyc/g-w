
<section class="banner grid-container">
  <?php if ($banner_background = get_field('banner_background')) : ?>
    <div class="banner__background-image" style="background-image: url('<?= esc_url($banner_background); ?>');">
    </div>
  <?php endif; ?>
  <div class=" banner__heading">
    <?php if ($banner_heading = get_field('banner_heading')) : ?>
      <?= $banner_heading; ?>
      <div class="banner__heading-links">
        <?php if ($banner_about_link = get_field('banner_about_link')) :
          $url = $banner_about_link['url'];
          $title = $banner_about_link['title'];
        ?>
          <a href="<?= esc_url($url); ?>" class="banner__heading-link link"><?= $title; ?></a>
        <?php endif; ?>
        <?php if ($banner_ask_link = get_field('banner_ask_link')) :
          $url_ask = $banner_ask_link['url'];
          $title_ask = $banner_ask_link['title'];
        ?>
          <a href="<?= esc_url($url_ask); ?>" class="banner__heading-link link"><?= $title_ask; ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  <?php if ($banner_subheading = get_field('banner_subheading')) : ?>
    <div class="banner__subheading">
      <?= $banner_subheading; ?>
    </div>
  <?php endif; ?>
  </div>
  </div>
</section>