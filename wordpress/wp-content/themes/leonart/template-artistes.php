<?php
/*
Template Name: Page Artistes
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Les artistes','wp'); ?></h2>
  </section>

	<?php include('footer.php'); ?>