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

    <?php $terms = get_terms('places', 
                            ['post_type' => ['post', 'artistes'],
                            'fields' => 'all',
                            'hide_empty' => true,
                            ]);
                            ?>
                            
    <form method="GET" id="filter-artists">
        <label for="post-filter-artists">Filtrer les artistes</label>
        <select id="post-filter-artists" name="post-filter-artists">
            <option value="none">Tous</option>
            <?php foreach($terms as $term): ?>
              <option value="<?= $term->slug; ?>"><?= $term->name; ?></option>
            <?php endforeach; ?>
        </select>
    </form>

    <div class="home__artistes-bloc-page">
      <?php $posts = new WP_Query( ['posts_per_page' => -1, 'post_type' => 'artistes', 'orderby' => 'rand'] ); ?>
      <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
      <div class="home__single-artiste artistes-margin">
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
        <a href="<?php the_permalink(); ?>" class="home__artistes-link" title="Vers la page de l'artiste : <?php the_title(); ?>"><span><?= __('Vers l\'artiste : Leonardo DiCaprio','wp'); ?></span></a>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php endwhile; endif; ?>
    </div>
  </section>

	<?php include('footer.php'); ?>