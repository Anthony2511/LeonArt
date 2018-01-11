<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('header-home.php'); ?>
  <?php include('navigation.php'); ?>
  <section class="home__artistes wrap">
    <h2 class="home__artistes-title title-red" aria-level="2" role="heading"><?= __('Quelques artistes','wp'); ?></h2>
    <div class="home__artistes-bloc">
      <?php $posts = new WP_Query( ['posts_per_page' => 4, 'post_type' => 'artistes'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <section class="home__single-artiste">
      <?php $homeArtist = get_field('artiste__photo'); ?>
        <figure class="home__artiste-img">
          <?php if( !empty($homeArtist) ): ?>
            <?php $size = 'thumb-home-artistes';
                  $thumb = $homeArtist['sizes'][ $size ]; ?>
          <img class="home__single-img" src="<?= $thumb; ?>" width="272" height="363" alt="<?= $homeArtist['alt']; ?>">
          <?php endif; ?>
          <div class="home__artistes-opacity">
             <a href="<?php the_permalink(); ?>" class="home__artiste-hover"><?= __('Voir l\'artiste', 'wp'); ?></a>
          </div>
        </figure>
        <h3 class="home__single-name" aria-level="3" role="heading"><?php the_title(); ?></h3>
        <a href="#" class="home__artistes-link" title="Vers la page de l'artiste : <?php the_title(); ?>"><span><?= __('Vers l\'artiste : Leonardo DiCaprio','wp'); ?></span></a>
      </section>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
     
    </div>
    <a href="#" class="home__artistes-button">Voir tous les artistes</a>
  </section>



	<?php include('footer.php'); ?>
