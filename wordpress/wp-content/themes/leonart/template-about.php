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
        <?php $image = get_field('about__img'); ?>
        <img src="<?= $image['url']; ?>" alt="" class="about__img">
      </figure>
      <section class="about__bloc-presentation">
        <h3 aria-level="3" role="heading" class="about__title-presentation"><?= __('Présentation','wp'); ?></h3>
        <ul class="about__list-presentation">
          <li class="about__item-presentation about__item-presentation--create">Créé en 2008</li>
          <li class="about__item-presentation about__item-presentation--location">à Liège</li>
          <li class="about__item-presentation about__item-presentation--expo">Exposition d'artistes et d'oeuvres</li>
        </ul>
      </section>
    </div>
    <section>
      <h2 class="title title-red left" aria-level="2" role="heading"><?= __('Description','wp'); ?></h2>
      <p class="about__text-presentation">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi est, sodales a ipsum fringilla, auctor pulvinar tellus. Donec ultrices dignissim velit ut dictum. Nam blandit porta eros. Ut dignissim tempus magna non gravida. Curabitur sed orci sed libero fermentum viverra quis vitae lectus. Fusce eros lorem, mollis nec placerat in, imperdiet ut leo. Nulla facilisi. Duis quis risus ligula. Integer tincidunt vulputate risus sed efficitur. Donec nisl odio, semper ac justo eget, ullamcorper tempus lacus.
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi est, sodales a ipsum fringilla, auctor pulvinar tellus. Donec ultrices dignissim velit ut dictum. Nam blandit porta eros. Ut dignissim tempus magna non gravida. Curabitur sed orci sed libero fermentum viverra quis vitae lectus. Fusce eros lorem, mollis nec placerat in, imperdiet ut leo. Nulla facilisi. Duis quis risus ligula. Integer tincidunt vulputate risus sed efficitur. Donec nisl odio, semper ac justo eget, ullamcorper tempus lacus.
      </p>
    </section>
  </section>