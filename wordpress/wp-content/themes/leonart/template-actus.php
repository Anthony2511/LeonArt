<?php
/*
Template Name: Page Actualités
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="wrap news-page">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Nos actualités','wp'); ?></h2>

      <!-- Bloc all news -->
      <div class="news-page__bloc">
        <?php $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'news', 'orderby' => 'ASC'] ); ?>
        <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>

        <!-- Bloc single news -->
        
        <div class="news-page__single-bloc">
            <h3 class="news-page__title"><?php the_title(); ?></h3>
            <time datetime="<?= get_the_date('d/m/Y'); ?>" class="news-page__date"><?= get_the_date(); ?></time>
            <span><?php get_the_date(); ?></span>
            <figure class="news-page__figure">
              <?php $news = get_field('news__img'); ?>
                <img src="<?= $news['url']; ?>" alt="" class="news-page__img">
            </figure>
            <div class="news-page__text">
               <?= the_field('news__text'); ?>
            </div>
             <a href="<?php the_permalink(); ?>" class="button button-article" title="Vers la page de l'article : <?php the_title(); ?>"><span class="span"><?= __('En savoir plus', 'wp'); ?></span></a>
            <a href="<?php the_permalink(); ?>" class="news-page__single-link"></a>
        </div>
        </a>
        <?php wp_reset_postdata(); ?> 
        <?php endwhile; endif; ?>
      </div>
  </section>

  <?php include('footer.php'); ?>