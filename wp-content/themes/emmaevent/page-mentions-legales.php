<?php get_header('mentions'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class="sections">
    <!-- Mentions légales -->
    <section>
        <div class="container">
            <div class="company">
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png"
                        alt="couronne de fleurs" height="575" width="575">
                    <h2 class="page-title">
                        <?php the_title(); ?>
                        <svg class="icon">
                            <use
                                xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                            </use>
                        </svg>
                    </h2>
                </div>
            </div>
    </section>

    <section>
        <div class="page-sidebar">
            <div class="thumbnail">
                <?php the_post_thumbnail('event-thumbnail-large'); ?>
            </div>
            <div class="news-list">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>