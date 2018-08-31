<?php
/*
Template Name: Page Agenda
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="agenda__page wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Notre agenda','wp'); ?></h2>

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
              <?php if(get_sub_field('event__location') !== ''): ?>
                <a href="<?= $location->guid;?>" class="agenda__location-sign" title="Vers la page du lieu : <?= $location->post_title;?>"><?= $location->post_title;?></a>
               <?php elseif(get_sub_field('event__location') == null): ?>
                <a href="<?= $location->guid;?>" class="agenda__location-sign location-hidden" title="Vers la page du lieu : <?= $location->post_title;?>"><?= $location->post_title;?></a>
            <?php endif; ?>
            </div>
      </div>
      <?php endwhile; endif; ?>
    </section>
    <?php wp_reset_postdata(); ?> 
    <?php endwhile; endif; ?>
  </section>

  	<?php include('footer.php'); ?>