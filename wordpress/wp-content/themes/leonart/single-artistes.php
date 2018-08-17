<?php
/*
Template Name: Page Single Artistes
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header();?>
  <?php include('navigation.php'); ?>
  <section class="wrap">
    <div>
        <?php $pageArtists = get_field('artiste__photo'); ?>
        <figure class="home__artiste-img">
          <img src="<?= $pageArtists['url']; ?>" alt="<?= $pageArtists['alt']; ?>">
        </figure>
        <h2><?php the_title(); ?></h2>
        <ul>
          <li><a href=""><?= __('Facebook','wp'); ?></a></li>
          <li><a href=""><?= __('Pinterest','wp'); ?></a></li>
          <li><a href=""><?= __('Twitter','wp'); ?></a></li>
        </ul>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in nulla id lectus bibendum tristique eget non tellus. Nunc ac luctus diam. Proin iaculis dui et laoreet vestibulum. Ut maximus massa at est pulvinar, mollis auctor purus sollicitudin. Donec vitae justo porttitor, accumsan metus ac, varius risus. Nulla vitae dolor efficitur, aliquam augue a, volutpat nulla. In vestibulum eleifend lorem, scelerisque auctor lectus viverra quis. Donec eget accumsan lectus.

Vestibulum rutrum at elit in pharetra. Phasellus eleifend imperdiet erat vitae laoreet. Integer magna nibh, eleifend eu tortor in, rhoncus vestibulum est. Aenean vitae vehicula nisl. Nullam auctor arcu a vestibulum sagittis. Donec pulvinar mi vel sagittis auctor. Vestibulum iaculis finibus pulvinar. Vestibulum commodo lacus ut purus eleifend, ut commodo dui euismod.
        </p>
    </div>
    <div>
      <div>
        <h3 class="title title-red"><?= __('Informations supplémentaires','wp'); ?></h3>
        <ul>
          <li>test</li>
          <li>test2</li>
          <li>test3</li>
        </ul>
      </div>
      <div>
         <h3 class="title title-red"><?= __('Quelques oeuvres','wp'); ?></h3>
      </div>
      
    </div>
  </section>