<?php $class = (isset($args['class']))? $args['class'] : ''; ?>
<div class="banner-main grid-container <?= $class; ?>" <?php if ($banner_background = get_field('banner_background')) : ?> style="background-image: url('<?= esc_url($banner_background); ?>');" <?php endif; ?>)>

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