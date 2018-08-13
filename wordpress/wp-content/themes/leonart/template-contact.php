<?php
/*
Template Name: Page Contact
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header(); ?>
  <?php include('navigation.php'); ?>
  <section class="padding-page wrap">
    <h2 class="title title-red" aria-level="2" role="heading"><?= __('Contact','wp'); ?></h2>
    <div class="contact">
      <form action="GET" class="contact__bloc">
        <span class="contact__required">Tous les champs suivis d'un <strong>*</strong> sont obligatoires</span>
        <div class="contact__champ">
          <label class="contact__label" for="name">Prénom *</label>
          <input class="contact__input" type="text" name="name" id="name" placeholder="Anthony" required>
        </div>
        <div class="contact__champ">
          <label class="contact__label" for="firstname">Nom *</label>
          <input class="contact__input" type="text" name="firstname" id="firstname" placeholder="Dupont" required>
        </div>
        <div class="contact__champ">
          <label class="contact__label" for="email">Email *</label>
          <input class="contact__input" type="email" name="email" id="email" placeholder="example@gmail.com" required>
        </div>
        <div class="contact__champ">
          <label class="contact__label" for="title">Sujet *</label>
          <input class="contact__input" type="text" name="title" id="title" placeholder="Le titre du sujet" required>
        </div>
        <div class="contact__champ">
          <label class="contact__label" for="message">Message *</label>
          <textarea class="contact__input textarea" name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
        </div>
        <input type="submit" class="contact__button" value="Envoyer le message">
      </form>
      <div class="contact__bloc contact__bloc-infos">
        <h3 class="contact__bloc-title">ASBL LENCREUSE</h3>
        <div>
          <a href="mailto:stleonart@gmail.com" class="contact__infos contact__infos--mail">stleonart@gmail.com</a>
          <p class="contact__infos contact__infos--tel">+32 (0)494 21 98 31</p>
          <p class="contact__infos contact__infos--location">Rue Adelin et Jules Husson, 33 <br>4020 Liège</p>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>