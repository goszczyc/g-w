<div class="recruitment-showcase grid-container">
  <div class="recruitment-showcase__content">

    <?php if ($recruitment_showcase_title = get_field('recruitment_showcase_title', 'options')) : ?>
      <h2 class="recruitment-showcase__content-title">
        <?= $recruitment_showcase_title; ?>
      </h2>
    <?php endif; ?>

    <?php if ($recruitment_showcase_content = get_field('recruitment_showcase_content', 'options')) : ?>
      <?= $recruitment_showcase_content; ?>
    <?php endif; ?>

    <?php if ($recruitment_showcase_link = get_field('recruitment_showcase_link', 'options')) : ?>
      <a href="<?= esc_url($recruitment_showcase_link['url']); ?>" class="recruitment-showcase__link"><?= $recruitment_showcase_link['title']; ?><img src="<?= get_template_directory_uri(); ?>/images/arrow.svg" alt=""></a>
    <?php endif; ?>

  </div>
  <?php if ($recruitment_showcase_image = get_field('recruitment_showcase_image', 'options')) : ?>
    <div class="recruitment-showcase__image">
    <?= wp_get_attachment_image($recruitment_showcase_image, 'full'); ?>
    </div>
  <?php endif; ?>
</div>