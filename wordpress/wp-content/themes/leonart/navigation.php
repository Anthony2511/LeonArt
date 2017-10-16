<nav class="nav">
  <h2 aria-level="2" role="heading" class="hidden"><?= __('Navigation principale','ma'); ?></h2>
  <div class="nav__button">
    <div class="nav__button-wrap">
      <div class="nav__icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="nav__bloc">
    <ul class="nav__menu">
      <?php global $post; $thePostID = $post->ID; ?>
      <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
        <li class="nav__item">
          <a class="nav__link" href="<?= $navItem->url;?>" title="Vers la page d'accueil"><span class="nav__span <?php echo $thePostID == $navItem->id ? "nav__span--active" : "" ;?>"><?php echo $navItem->label;?></span></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>
