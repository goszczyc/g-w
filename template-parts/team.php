<?php if (have_rows('team', 'options')) :
  $team_link = get_field('team_link', 'options');
?>
  <section class="team container">
    <div class="row">
      <?php while (have_rows('team', 'options')) :
        the_row();
        $speciality = get_sub_field('speciality');
        $photo = get_sub_field('photo');
        $name = get_sub_field('name');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email');
      ?>
        <div class="team__member col-12 col-xs-6 col-md-4 col-lg-3">
          <?= wp_get_attachment_image($photo, 'team-member', '', ['class' => 'team__member-photo']); ?>
          <h3 class="team__member-name"><?= $name; ?></h3>
          <h4 class="team__member-speciality"><?= $speciality; ?></h4>
          <a href="tel: <?= str_replace(' ', '', $phone); ?>" class="team__member-phone"><img src="<?= get_template_directory_uri(); ?>/images/phone-grey.svg" alt=""> <?= $phone; ?></a>
          <a href="mailto: <?= $email; ?>" class="team__member-email"><img src="<?= get_template_directory_uri(); ?>/images/mail-grey.svg" alt=""> Wyślij wiadomość e-mail</a>
          <?php if ($team_link) : ?>
            <a href="<?= $team_link['url']; ?>" class="btn btn--primary"><?= $team_link['title']; ?></a>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>