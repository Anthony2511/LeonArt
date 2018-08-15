<footer class="footer">
  <div class="footer__bloc">
    <div class=" footer__container wrap">

      <!-- SOCIAUX -->
      <section class="footer__bloc-infos">
        <h2 role="heading" aria-level="2"><?= __('Nous suivre','wp'); ?></h2>
        <div>
          <a href="" class="footer__social-item footer__social-item--facebook"><span><?= __('Facebook','wp'); ?></span></a>
          <a href="" class="footer__social-item footer__social-item--pinterest"><span><?= __('Pinterest','wp'); ?></span></a>
          <a href="" class="footer__social-item footer__social-item--twitter"><span><?= __('Twitter','wp'); ?></span></a>
        </div>
      </section>

      <!-- INFORMATIONS -->
      <section class="footer__bloc-infos">
        <h2 role="heading" aria-level="2"><?= __('Informations utiles','wp'); ?></h2>
        <?php $posts = new WP_Query( ['page_id' => 23] ); ?>
        <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
        <?php $contactInfos = get_fields(); ?>
          <div>
            <a href="mailto:stleonart@gmail.com" class="footer__infos footer__infos--mail"><?= $contactInfos['contact__email']; ?></a>
            <p class="footer__infos footer__infos--tel"><?= $contactInfos['contact__phone']; ?></p>
            <p class="footer__infos footer__infos--location"><?= $contactInfos['contact__location']; ?></p>
          </div>
        <?php wp_reset_postdata(); ?> 
        <?php endwhile; endif; ?>
      </section>

      <!-- NEWSLETTER -->
      <section class="footer__bloc-infos">
        <h2 role="heading" aria-level="2"><?= __('S\'inscrire à la newsletter','wp'); ?></h2>
        <form action="GET">
          <label for="register" class="hidden"><?= __('Inscription','wp'); ?></label>
          <input class="footer__register-input" type="email" id="register" name="register" placeholder="myriamdupont@gmail.com">
          <button type="submit" class="button button-register"><span class="span">S'inscrire</span></button>
        </form>
      </section>

    </div>
  </div>
  <div class="footer__partenaires">
    <div class="wrap">
      <h2 class="footer__partenaires-title"><?= __('En collaboration avec','wp'); ?></h2>

      <div class="contact__partenaires-bloc">
    
      </div>

    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?= $scripts . 'nav.js'; ?>"></script>
<script src="<?= $scripts . 'no-js.js'; ?>"></script>
</body>
</html>
