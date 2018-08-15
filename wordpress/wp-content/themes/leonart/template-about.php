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
    <section class="about__bloc-text">
      <h3 class="title title-red left" aria-level="3" role="heading"><?= __('Description','wp'); ?></h3>
      <p class="about__text-presentation"><?= the_field('about__text');?>
      </p>
    </section>

    <!-- ORGANISTEURS LIST -->
    <section>
      <h3 class="title title-red" aria-level="3" role="heading"><?= __('Nos organisateurs','wp'); ?></h3>
      <div class="home__artistes-bloc-page">
        <?php if( have_rows('organisateurs') ): ?>
        <?php while( have_rows('organisateurs') ): the_row(); ?>
          <div class="home__single-artiste artistes-margin">
              <figure class="home__artiste-img">
                <?php $orga = get_sub_field('organisateur__img'); ?>
                <img class="home__single-img" src="<?= $orga['url']; ?>" alt="<?= $orga['alt']; ?>">
              </figure>
              <section class="home__artistes-titleBloc">
                <h3 class="home__single-name" aria-level="3" role="heading"><?= the_sub_field('organisateur__name'); ?></h3>
                  <span class="home__artist-taxonomy"><?= the_sub_field('organisateur__fonction'); ?></span>
              </section>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
  </section>
  <?php include('footer.php'); ?>