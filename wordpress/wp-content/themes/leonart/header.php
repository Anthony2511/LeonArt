<header class="header-page">
  <section class="wrap">
  </section>
</header>
<div class="breadcrumb">
  <h2 class="hidden" aria-level="2" role="heading"><?= __('Fil d\'ariane','wp'); ?></h2>

  <?php if (is_single()): ?>
    <ul class="breadcrumb__list wrap">
      <li class="breadcrumb__item arrow"><a class="breadcrumb__item-link" href="<?= get_home_url(); ?>" title="Vers la page d'accueil"><span>Accueil</span></a></li>
      
      <?php if(is_singular('artistes')): ?>
        <li class="breadcrumb__item"><a class="breadcrumb__item-link" href="<?php the_permalink(54); ?>" title="Vers la page Artistes"><?= __('Artistes','ma'); ?></a></li>
      <?php endif; ?>

      <?php if(is_singular('lieux')): ?>
        <li class="breadcrumb__item"><a class="breadcrumb__item-link" href="<?php the_permalink(82); ?>" title="Vers la page Lieux"><?= __('Lieux','ma'); ?></a></li>
      <?php endif; ?>

      <?php if(is_singular('news')): ?>
        <li class="breadcrumb__item"><a class="breadcrumb__item-link" href="<?php the_permalink(41); ?>" title="Vers la page Actualités"><?= __('Actualités','ma'); ?></a></li>
      <?php endif; ?>

      <li class="breadcrumb__item arrow-left"><a class="breadcrumb__item-link" href="<?php the_permalink(); ?>" title="Vers la page : <?php the_title(); ?>"><?php the_title(); ?></a></li>
    </ul>
    <?php else : ?>
      <ul class="breadcrumb__list wrap">
        <li class="breadcrumb__item arrow"><a class="breadcrumb__item-link" href="<?= get_home_url(); ?>" title="Vers la page d'accueil"><span>Accueil</span></a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__item-link" href="<?php the_permalink(); ?>" title="Vers la page <?php the_title(); ?>"><?php the_title(); ?></a></li>
      </ul>
    <?php endif; ?>
</div>
