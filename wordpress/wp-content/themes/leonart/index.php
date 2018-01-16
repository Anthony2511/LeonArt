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
      <?php $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'artistes'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <div class="home__single-artiste">
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
        <section class="home__artistes-titleBloc">
          <h3 class="home__single-name" aria-level="3" role="heading"><?php the_title(); ?></h3>
          <?php $artistID = $post->ID; ?>
          <?php if(wp_get_taxonomies($artistID, 'places')): ?>
            <span class="home__artist-taxonomy"><?= wp_get_taxonomies($artistID, 'places'); ?></span>
          <?php endif; ?>
        </section>
        <a href="<?php the_permalink(); ?>" class="home__artistes-link" title="Vers la page de l'artiste : <?php the_title(); ?>"><span><?= __('Vers l\'artiste : Leonardo DiCaprio','wp'); ?></span></a>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
    </div>
    <a href="#" class="home__artistes-button" title="Vers la page de tous les artistes"><span class="span"><?= __('Voir tous les artistes', 'wp'); ?></span></a>
  </section>
  <div class="home__programmes">
    <section class="home__programmes-bloc wrap">
      <h2 class="home__artistes-title title-white" aria-level="2" role="heading"><?= __('Notre programme','wp'); ?></h2>
      <?php $posts = new WP_Query( ['posts_per_page' => 2, 'post_type' => 'activites'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <div class="home__programmes-single">
        <?php $homeProgrammes = get_field('event__photo'); ?>
        <figure class="home__programmes-figure">
          <?php if( !empty($homeProgrammes) ): ?>
            <?php $size = 'thumb-home-programmes';
                  $thumb = $homeProgrammes['sizes'][ $size ]; ?>
          <img class="home__programmes-img" src="<?= $thumb; ?>" width="421" height="312" alt="<?= $homeProgrammes['alt']; ?>">
          <?php endif; ?>
        </figure>
        <section class="home__programmes-infos">
          <h3 class="home__programmes-title" aria-level="3" role="heading"></h3><?= the_title(); ?></h3>
          <div class="home__programmes-time">
            <time class="home__programmes-date" datetime="2018-09-30"><?= get_field('event__time'); ?></time>
            <a href="#" class="home__programmes-lieu">Le magasin</a>
          </div>
          <a href="#"><?= __('En savoir plus','wp'); ?></a>
        </section>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
    </section>
  </div>

	<?php include('footer.php'); ?>
