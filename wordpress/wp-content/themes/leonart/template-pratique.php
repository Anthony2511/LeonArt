<?php
/*
Template Name: Page Pratique
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section>
    <div class="wrap pratique__bloc-intro">
      <h2 class="title title-red" aria-level="2" role="heading"><?= __('En pratique','wp'); ?></h2>
      <p class="pratique__start">L’évènement 2018 Saint Léon’Art aura lieu du vendredi 28 au dimanche 30 septembre dans le quartier Saint Léonard.</p>
    </div>
    <div class="pratique__background">
      <div class="pratique__background-bloc wrap">
    <figure>
      <?php $pratique = get_field('pratique__image'); ?>
      <img  src="<?= $pratique['url']; ?>" alt="<?= $pratique['alt']; ?>">
    </figure>
    <section>
      <h3 class="pratique__location-title">Liste des lieux</h3>
      <div class="pratique__location-container">
      <?php $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'lieux', 'orderby' => 'ASC'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <div class="pratique__location-bloc">
        <span class="pratique__number"><?= the_field('lieu__number'); ?></span>
        <a href="<?php the_permalink(); ?>" class="pratique__location" title="Vers le lieu : <?php the_title(); ?>"><?php the_title(); ?></a>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
      </div>
    </section>
        </div>
    </div>
    <div class="wrap">
      <h2>Test</h2>
    </div>
  
  </section>

   	<?php include('footer.php'); ?>