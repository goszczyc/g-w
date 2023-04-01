<div class="banner-news grid-container">

  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="banner-news__breadcrumbs">', '</div>');
  }
  ?>
  <div class="banner-news__heading">
    <p class="banner-news__heading-date">
      <?php _e('added', 'gut'); ?>: <?= get_the_date('d F Y'); ?>
    </p>
    <h1 class="banner-news__heading-title">
      <?= get_the_title(); ?>
    </h1>
   <?php if($news_subheading = get_field('news_subheading')): ?>
    <p class="banner-news__heading-subtitle">
      <?= $news_subheading; ?>
    </p> 
   <?php endif; ?>
  </div>
</div>