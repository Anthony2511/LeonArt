<?php
/*
Template Name: Page Contact
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="padding-page wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Contactez-nous','wp'); ?></h2>
    <div class="contact">
      <?= do_shortcode('[contact-form-7 id="98" title="Formulaire de contact"]'); ?>
      <section class="contact__bloc contact__bloc-infos">
        <?php $contactInfos = get_fields(); ?>
        <h3 class="contact__bloc-title"><?= __('ASBL LENCREUSE','wp'); ?></h3>
        <div>
          <a href="mailto:stleonart@gmail.com" class="contact__infos contact__infos--mail"><?= $contactInfos['contact__email']; ?></a>
          <p class="contact__infos contact__infos--tel"><?= $contactInfos['contact__phone']; ?></p>
          <p class="contact__infos contact__infos--location"><?= $contactInfos['contact__location']; ?></p>
        </div>
      </section>
    </div>
  </section>


  <?php include('footer.php'); ?>