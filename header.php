<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title><?php echo wp_title(); ?></title>
  <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


  <header class="header-container">
    <div class="header container">
      <div class="header__logo">
        <?php if ($header_logo = get_field('logo', 'options')) : ?>
          <?= wp_get_attachment_image($header_logo, 'full'); ?>
        <?php endif; ?>
      </div>
      <div class="header__menus">
        <?php wp_nav_menu($args = array(
          'menu' => 10,
          'menu_class' => 'header__menu',
          'container' => false,
        )); ?>
        <?php if (($header_phone = get_field('contact_phone', 'options')) && $header_phone_icon = get_field('contact_phone_icon', 'options')) : ?>
          <a href="tel: <?= preg_replace('/\s+/', '', $header_phone); ?>" class="header__phone"><?= wp_get_attachment_image($header_phone_icon, 'full', '', ['class' => 'header__phone-image']) ?><?= $header_phone; ?></a>
        <?php endif; ?>
        <div class="header__lang-menu">
          <?php language_current(); ?>
          <?php language_selector(); ?>
        </div>
        <button class="header__burger">
          <div class="header__burger-bar header__burger-bar--top"></div>
          <div class="header__burger-bar header__burger-bar--middle"></div>
          <div class="header__burger-bar header__burger-bar--bottom"></div>
          <div class="header__burger-menu-container">
            <?php wp_nav_menu($args = array(
              'menu' => 11,
              'menu_class' => 'header__burger-menu',
              'container' => false,
            )); ?>
          </div>
        </button>
      </div>
    </div>
  </header>