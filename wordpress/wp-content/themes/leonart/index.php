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
      <section class="home__single-artiste">
        <figure class="home__artiste-img">
          <img class="home__single-img" src="<?= $images . 'artist.jpg'; ?>" width="450" height="600" alt="Photo de profil de Leonardo">
          <div class="home__artistes-opacity">
             <a href="<?php the_permalink(); ?>" class="home__artiste-hover"><?= __('Voir l\'artiste', 'wp'); ?></a>
          </div>
        </figure>
        <h3 class="home__single-name" aria-level="3" role="heading">Leonardo DiCaprio</h3>
        <a href="#" class="home__artistes-link" title="Vers la page de l'artiste : Leonardo DiCaprio"><span><?= __('Vers l\'artiste : Leonardo DiCaprio','wp'); ?></span></a>
      </section>
      <section class="home__single-artiste">
        <figure class="home__artiste-img">
          <img class="home__single-img" src="<?= $images . 'artist.jpg'; ?>" width="450" height="600" alt="Photo de profil de Leonardo">
        </figure>
        <h3 class="home__single-name" aria-level="3" role="heading">Leonardo DiCaprio</h3>
        <a href="#" class="home__artistes-link"></a>
      </section> 
      <section class="home__single-artiste">
        <figure class="home__artiste-img">
          <img class="home__single-img" src="<?= $images . 'artist.jpg'; ?>" width="450" height="600" alt="Photo de profil de Leonardo">
        </figure>
        <h3 class="home__single-name" aria-level="3" role="heading">Leonardo DiCaprio</h3>
        <a href="#" class="home__artistes-link"></a>
      </section>
      <section class="home__single-artiste">
        <figure class="home__artiste-img">
          <img class="home__single-img" src="<?= $images . 'artist.jpg'; ?>" width="450" height="600" alt="Photo de profil de Leonardo">
        </figure>
        <h3 class="home__single-name" aria-level="3" role="heading">Leonardo DiCaprio</h3>
        <a href="#" class="home__artistes-link"></a>
      </section>
    </div>
    <a href="#" class="home__artistes-button">Voir tous les artistes</a>
  </section>



	<?php include('footer.php'); ?>
