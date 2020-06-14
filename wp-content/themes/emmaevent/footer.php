<footer class="footer">
  
    <section class="footer__up">
    <?php dynamic_sidebar('footer') ?>
      <!-- <div class="footer__col">
        <h4 class="footer__title">A Propos d'Emma Event</h4>
        <ul>
          <li><a href="#" class="menu__footer__up">A propos</a></li>
          <li><a href="#" class="menu__footer__up">Mentions légales</a></li>
        </ul>
      </div> -->
      <div class="footer__col">
        <h4 class="footer__title">Prochain événement</h4>
        <p>Facebook</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__title">Instagram</h4>
        <p>tempor ut in id nisi dolore eiusmod tempor. varius, nulla eu, pariatur. eu mi. quis mollit est in, maecenas
          sapien, qui aliquet,</p>
      </div>
    </section>

    <section class="footer__down">
      <div class="footer__menu__area">
        <div class="grid">
          <div class="position__left__logo">
          <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Homepage', 'emmaevent')?>">
            <img src="<?= get_theme_mod('logo footer') ?>" alt="logo">            
          </a>
          </div>


          <div class="position__center">
            <nav class="nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'footer',
              'container' => false,
              'menu_class' => 'nav__menu'
            ]);
            ?> 
              <!-- <ul class="nav__menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="#" aria-current="page">A propos</a></li>
                <li><a href="#">Evénements</a></li>
                <li><a href="#">Galerie</a></li>
                <li><a href="#">Contact</a></li>
              </ul> -->
            </nav>
          </div>

          <div class="position__right__credit">
            <div class="footer__credits">
              <p>Made with<span></span> by <a href="https://priscillaroy.fr" class="developer">Priscilla Roy</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>

</body>

</html>
<?php
    // wp_nav_menu([
    //     'theme_location' => 'footer',
    //     'container' => 'ul',
    //     'menu_class' => 'navbar-nav mr-auto'
    // ])
    ?>
      <!--<p>Copyright &copy; 2020</p>
    </footer>
    <?php //wp_footer(); ?>
    <!-- Vous pourriez ajouter votre script Google Analytics ici -->
  <!--</body>
</html>-->