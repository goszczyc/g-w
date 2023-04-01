<?php $class = (isset($args['class']))? $args['class'] : ''; ?>
<div class="banner-main grid-container <?= $class; ?>"  style="background-image: url('<?= esc_url(get_the_post_thumbnail_url()); ?>');">

  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="banner-main__breadcrumbs">', '</div>');
  }
  ?>
  <div class="banner-main__heading-bg">
  </div>
  <?php if($banner_heading = get_field('banner_heading')): ?>
    <h1 class="banner-main__heading">
    <?= $banner_heading; ?>
  </h1>
  <?php endif; ?>
</div>