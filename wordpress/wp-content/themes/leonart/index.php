<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header('home'); ?> 
  <?php include('navigation.php'); ?>

  <!-- Liste des artistes -->
  <section class="home__artistes wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Quelques artistes','wp'); ?></h2>
    <div class="home__artistes-bloc">
      <?php $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'artistes', 'orderby' => 'rand'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <div class="home__single-artiste">
      <?php $homeArtist = get_field('artiste__photo'); ?>
        <figure class="home__artiste-img">
          <?php if( !empty($homeArtist) ): ?>
            <?php $size = 'thumb-home-artistes';
                  $thumb = $homeArtist['sizes'][ $size ]; ?>
          <img class="home__single-img" src="<?= $thumb; ?>" width="272" height="211" alt="<?= $homeArtist['alt']; ?>">
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
        <a href="<?php the_permalink(); ?>" class="home__artistes-link" title="Vers la page de l'artiste : <?php the_title(); ?>"><span><?= __('Vers l\'artiste : <?php the_title(); ?>','wp'); ?></span></a>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
    </div>
    <a href="<?php the_permalink(54); ?>" class="button" title="Vers la page de tous les artistes"><span class="span"><?= __('Voir tous les artistes', 'wp'); ?></span></a>
  </section>

  <!-- Liste des programmes -->
  <div class="home__programmes">
    <section class="home__programmes-bloc wrap">
      <h2 class="title title-white" aria-level="2" role="heading"><?= __('Notre agenda','wp'); ?></h2>
      <?php $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'activites'] ); ?>
    <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
    <section class="agenda__bloc">
      <h3 class="agenda__title-date" role="heading" aria-level="3"><?php the_title(); ?></h3>
      <?php if( have_rows('event') ): ?>
      <?php while( have_rows('event') ): the_row(); ?>
      <div class="agenda__bloc-infos">

          <!-- Heure de l'event -->
          <div class="agenda__time">
            <?= the_sub_field('event__hour-start'); ?>
            <?php if (the_sub_field('event__hour-end') != null): ?>
             - <?= the_sub_field('event__hour-end'); ?>
            <?php else: ?>
            <?php endif; ?>
          </div>
          
          <!-- Infos de l'event -->
           <?php $location = get_sub_field('event__location');?>
            <div class="agenda__location">
              <h3 class="agenda__location-title"><?= the_sub_field('event__title'); ?></h3>
              <a href="<?= $location->guid;?>" class="agenda__location-sign" title="Vers la page du lieu : <?= $location->post_title;?>"><?= $location->post_title;?></a>
            </div>
      </div>
      <?php endwhile; endif; ?>
    </section>
    <?php wp_reset_postdata(); ?> 
    <?php endwhile; endif; ?>
    </section>
  </div>

	<?php include('footer.php'); ?>
