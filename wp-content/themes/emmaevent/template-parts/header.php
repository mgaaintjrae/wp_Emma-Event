<div class="grid">

    <div class="position__left__logo">
        <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Emma-Event', 'emmaevent') ?>">
            <img width="100" height="86" src="<?= get_theme_mod('logo header') ?>" alt="logo Emma-Event">
        </a>
    </div>

    <div class="position__center">
        <nav class="nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'nav__menu'
            ]);
            ?>
        </nav>
    </div>
</div>