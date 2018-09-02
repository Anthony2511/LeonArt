<?php
/*
Template Name: Page Single Lieux
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="wrap lieu-page">
    <h2 class="title title-red" aria-level="2" role="heading"><?php the_title(); ?></h2>

    <div>
  
   
    <div class="lieu__container">
    <figure class="lieu__figure">
        <?php $pratique = get_field('lieu__image'); ?>
        <img  src="<?= $pratique['url']; ?>" alt="<?= $pratique['alt']; ?>">
    </figure>
     <div class="lieu__text">
        <?= the_field('lieu__text'); ?>
      </div>
    
    </div>
      <section class="lieu__infos">
        <h3 class="title title-red left" aria-level="3" role="heading"><?= __('Informations','wp'); ?></h3>
        <div>
           <a href="mailto:<?= the_field('lieu__email'); ?>" class="lieu__more lieu__more--mail"><?= the_field('lieu__email'); ?></a>
           <p class="lieu__more lieu__more--tel"><?= the_field('lieu__phone'); ?></p>
           <p class="lieu__more lieu__more--location"><?= the_field('lieu__location'); ?></p>
        </div>
      </section>
    </div>
  </section>

  <?php include('footer.php'); ?>