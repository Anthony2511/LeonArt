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
    <a href="<?= get_home_url(); ?>" class="nav__bloc-link">
      <svg class="nav__logo" xmlns="http://www.w3.org/2000/svg" viewBox="1133 -93.672 66.69 74.15">
        <defs><style>.a{fill:#da4736;}.b{fill:#ffcd79;}.c{fill:#fff;}</style></defs>
        <g transform="translate(303 -325.672)">
          <g transform="translate(830 232)">
            <path class="a" d="M63,37.08a29.62,29.62,0,1,1-8.686-20.965A29.62,29.62,0,0,1,63,37.08"/>
            <rect class="b" width="30.94" height="68.08" transform="translate(17.87 3.04)"/>
            <path class="c" d="M66.69,39.59,0,0V34.57L66.69,74.15V39.59Z"/>
          </g>
        </g>
      </svg>
      <?php if(!is_front_page () && !is_home ()): ?>
        <h3 class="nav__bloc-title">Saint Leon'Art</h3>
      <?php else: ?>
      <?php endif; ?>
    </a>
    <ul class="nav__menu <?php if(!is_front_page () && !is_home ()): ?> menu-page<?php else: ?><?php endif; ?>">
      <?php global $post; $thePostID = $post->ID; ?>
      <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
        <li class="nav__item">
            <a class="nav__link" href="<?= $navItem->url;?>" title="Vers la page <?php echo $navItem->label;?>"><span class="nav__span <?php echo $thePostID == $navItem->id ? "nav__span--active" : "" ;?>"><?php echo $navItem->label;?></span></a>
        </li>
        <?php endforeach; ?>
    </ul>
  </div>
</nav>
