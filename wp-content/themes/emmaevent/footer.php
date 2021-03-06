</main>

<footer class="footer">

    <section class="footer__up">
        <?php dynamic_sidebar('footer') ?>
    </section>

    <section class="footer__down">
        <div class="footer__menu__area">
            <div class="footer__border"></div>
            <div class="grid">
                <div class="position__left__logo">
                    <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Homepage', 'emmaevent') ?>">
                        <img src="<?= get_theme_mod('logo footer') ?>" loading="lazy" alt="logo Emma-Event">
                    </a>
                </div>

                <div class="position__center">
                    <nav class="nav">
                        <?php
            wp_nav_menu([
              'theme_location' => 'footer', 
              'container' => false,
              'menu_class' => 'nav__footer__menu'
            ]);
            ?>
                    </nav>
                </div>

                <div class="position__right__credit">
                    <div class="footer__credits">
                        <p>Made with ❤ by <a href="https://priscillaroy.fr" class="developer" target="_blank"
                                rel="noopener noreferrer">Priscilla Roy</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>
                    EMMA EVENT © 2020 TOUS DROITS RESERVES
                </p>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
<!-- Vous pourriez ajouter votre script Google Analytics ici -->

</body>

</html>