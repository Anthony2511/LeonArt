<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body class="margin">
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('header-home.php'); ?>
  <?php include('navigation.php'); ?>
  <section class="home__artistes">
    <h2 class="home__artistes-title title-red" aria-level="2" role="heading"><?= __('Nos artistes','wp'); ?></h2>
    <section class="home__single-artiste">
      <figure class="home__bloc-img">
        <img class="home__single-img" src="<?= $images . 'artist.jpg'; ?>" width="450" height="600" alt="Photo de profil de Leonardo">
      </figure>
      <h3 class="home__single-name" aria-level="3" role="heading">Leonardo DiCaprio</h3>
    </section>
  </section>



	<?php include('footer.php'); ?>
