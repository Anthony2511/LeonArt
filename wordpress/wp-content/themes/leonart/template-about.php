<?php
/*
Template Name: Page About
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="padding-page wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('&Aacute; Propos de nous','wp'); ?></h2>

    <!-- BLOC PRESENTATION -->
    <div class="about__presentation">
      <figure class="about__bloc-img">
        <?php $about = get_field('about__img'); ?>
        <img src="<?= $about['url']; ?>" alt="" class="about__img">
      </figure>
      <section class="about__bloc-presentation">
        <h3 aria-level="3" role="heading" class="about__title-presentation"><?= __('Présentation','wp'); ?></h3>
        <ul class="about__list-presentation">
          <li class="about__item-presentation about__item-presentation--create"><?= the_field('about__date');?></li>
          <li class="about__item-presentation about__item-presentation--location"><?= the_field('about__location');?></li>
          <li class="about__item-presentation about__item-presentation--expo"><?= the_field('about__who');?></li>
        </ul>
      </section>
    </div>
    <section>
      <h2 class="title title-red left" aria-level="2" role="heading"><?= __('Description','wp'); ?></h2>
      <p class="about__text-presentation"><?= the_field('about__text');?>
      </p>
    </section>
  </section>
  <?php include('footer.php'); ?>