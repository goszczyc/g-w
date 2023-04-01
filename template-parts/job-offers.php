<?php if (have_rows('job_offers')) : ?>
  <section class="job-offers container">

    <?php if ($job_offers_heading = get_field('job_offers_heading')) : ?>
      <div class="row justify-content-center">
        <h2 class="job-offers__heading">
          <?= $job_offers_heading; ?>
        </h2>
      </div>
    <?php endif; ?>

    <div class="row">
      <?php while (have_rows('job_offers')) : the_row(); ?>
        <div class="col-12">
          <div class="job-offers__offer">

            <?php if ($offer_name = get_sub_field('offer_name')) : ?>
              <h3 class="job-offers__offer-name"><?= $offer_name; ?></h3>
            <?php endif; ?>

            <?php if ($offer_description = get_sub_field('offer_description')) : ?>
              <div class="job-offers__offer-description">
                <?= $offer_description; ?>
              </div>
            <?php endif; ?>

            <?php if ($recruitment_email = get_field('recruitment_email')) : ?>
              <a href="mailto: <?= $recruitment_email; ?>" class="job-offers__offer-email">
                <?= $recruitment_email; ?>
              </a>
            <?php endif; ?>

          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>