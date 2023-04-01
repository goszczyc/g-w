<?php
$currentId = get_the_ID();
$args = array(
  'post_type' => 'specialities',
  'numberposts' => -1
);

$specialities = get_posts($args);

get_header();
?>

<main class="main">
  <?php get_template_part('/template-parts/banner-speciality', '', ['class' => 'banner-main--dark']); ?>
  <section class="grid-container aside-layout">
    <div class="aside-layout__menu-background"></div>
    <aside class="aside-layout__menu">

      <?php foreach ($specialities as $speciality) : ?>
        <?php if ($currentId != $speciality->ID) : ?>
          <a href="<?= get_permalink($speciality->ID); ?>" class="aside-layout__menu-item"><?= $speciality->post_title ?></a>
        <?php else : ?>
          <p class="aside-layout__menu-item aside-layout__menu-item--current"><?= $speciality->post_title ?></p>
        <?php endif; ?>
      <?php endforeach; ?>

    </aside>

    <div class="aside-layout__content-background"></div>
    <div class="aside-layout__content">
      <h1><?= get_the_title(); ?></h1>
      <?= get_the_content(); ?>

      <?php if (have_rows('team', 'options')) :
        while (have_rows('team', 'options')) :
          the_row();
          $headId = get_sub_field('speciality_id');
          $speciality = get_sub_field('speciality');
      ?>

          <?php if ($headId == $currentId) :
            $photo = get_sub_field('photo');
            $name = get_sub_field('name');
            $phone = get_sub_field('phone');
            $email = get_sub_field('email');
            $sub_heading = get_sub_field('sub_heading');
            $head_heading = get_field('department_head_heading', 'options');
            $team_link = get_field('team_link', 'options');
          ?>
            <div class="department-head">
              <div class="department-head__heading">
                <h2><?= $head_heading; ?></h2>
                <p><?= $sub_heading; ?></p>
              </div>
              <?= wp_get_attachment_image($photo, 'dep-head', '', ['class' => 'department-head__photo']); ?>
              <h3 class="department-head__name"><?= $name; ?></h3>
              <h4 class="department-head__speciality"><?php _e('Speciality', 'gut'); ?><?= ': ' . $speciality; ?></h4>
              <a href="tel: <?= str_replace(' ', '', $phone); ?>" class="department-head__phone"><img src="<?= get_template_directory_uri(); ?>/images/phone.svg" alt=""> <?= $phone; ?></a>
              <a href="mailto: <?= $email; ?>" class="department-head__email"><img src="<?= get_template_directory_uri(); ?>/images/mail.svg" alt=""> <?= $email; ?></a>
              <?php if($team_link): ?>
                <a href="<?= $team_link['url']; ?>" class="btn btn--primary"><?= $team_link['title']; ?></a>
              <?php endif; ?>
            </div>

      <?php endif;
        endwhile;
      endif; ?>

    </div>
  </section>
  <?php get_template_part('/template-parts/specialities', '', ['less' => true, 'other' => true]); ?>
</main>

<?php get_footer(); ?>