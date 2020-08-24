<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="notfound" class="site-main" role="main">

        <div class="error-404 notfound">
            <header class="notfound-404">
                <h1 class="page-title"><?php _e( '404', 'emmaevent' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <h2>
                    <?php _e( 'Oops, The Page you are looking for can\'t be found!', 'emmaevent' ); ?>
                </h2>
                <div class="notfound-search">
                    <!-- <input type="text" placeholder="Search...">
                    <button type="button">Recherchez</button> -->
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php the_permalink(19); ?>" title="Page d'accueil"><span
                        class="arrow"></span><?php _e('Return To Homepage', 'emmaevent'); ?></a>
            </div><!-- .page-content -->
        </div><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();