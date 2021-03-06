<?php
/*
Template Name: Page Single Artistes
*/
; ?>

<?php include('head.php'); ?>

<body class="galerie-page">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header();?>
  <?php include('navigation.php'); ?>
  <div class="wrap">

    <div class="artiste-page">

    <!-- Bloc 1 -->
    <div class="artiste-page__bloc">
       <!-- Bloc Gauche -->
      <div class="artiste-page__infos">
        <?php $pageArtists = get_field('artiste__photo'); ?>
          <div class="artiste-page__figure">
            <img class="artiste-page__img" src="<?= $pageArtists['url']; ?>" alt="<?= $pageArtists['alt']; ?>">
          </div>
          <div class="artiste-page__bloc-social">
            <a href="<?= the_field('artiste__facebook'); ?>" target="_blank" class="artiste-page__social artiste-page__social--facebook"><span><?= __('Facebook','wp'); ?></span></a>
            <a href="<?= the_field('artiste__pinterest'); ?>" target="_blank" class="artiste-page__social artiste-page__social--pinterest"><span><?= __('Pinterest','wp'); ?></span></a>
            <a href="<?= the_field('artiste__twitter'); ?>" target="_blank" class="artiste-page__social artiste-page__social--twitter"><span><?= __('Twitter','wp'); ?></span></a>
          </div>
      </div>

      <!-- Bloc Droite -->
      <div class="artiste-page__bio">
        <h2 class="artiste-page__title" aria-level="2" role="heading"><?php the_title(); ?></h2>
        <?= the_field('artiste__text'); ?>
      </div>
    </div>
     

    <!-- Bloc 2 -->
    <div class="artiste-page__bloc artiste-page__bloc-two">

      <!-- Bloc Gauche -->
      <div class="artiste-page__infos artiste-page__infos-two">
        <h3 class="title title-red font-size"><?= __('Informations supplémentaires','wp'); ?></h3>
        <div>
          <div>
            <a href="mailto:stleonart@gmail.com" class="artiste-page__more artiste-page__more--mail"><?= the_field('artiste__email'); ?></a>
            <p class="artiste-page__more artiste-page__more--tel"><?= the_field('artiste__phone'); ?></p>
          </div>
        </div>
      </div>

      <!-- Bloc Droite -->
      <div class="artiste-page__oeuvres">
         <h3 class="title title-red font-size"><?= __('Quelques oeuvres','wp'); ?></h3>
          <div id="galerie" class="artiste-page__gallery">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <?php if( have_rows('image-galerie') ): ?>
            <?php while( have_rows('image-galerie') ): the_row(); ?>
                
            <?php $galerieImage = get_sub_field('galerie_image'); ?>
              <a href="<?= $galerieImage['url']; ?>">
              <figure>
              <?php if( !empty($galerieImage) ): ?>
                  <?php $size = 'thumb-gallery';
                  $thumb = $galerieImage['sizes'][ $size ]; ?>
                  <img src="<?= $thumb; ?>" alt="<?= $galerieImage['alt']; ?>" class="artiste-page__gallery-img" />
              <?php endif; ?>
              </figure>
              </a>
            <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
          </div>
        </div>

      </div>

      <div>
        <h3>Retrouvez également l'artiste ici</h3>
        <?php $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'artistes'] ); ?>
    <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
        <?php $location = get_field('artiste__location');?>


        <a href="<?= $location->guid;?>" title="Vers la page du lieu : <?= $location->post_title;?>"><?= $location->post_title;?></a>
         <?php wp_reset_postdata(); ?> 
    <?php endwhile; endif; ?>
      </div>
      
    </div>
</div>
</div>

<?php include('footer.php'); ?>