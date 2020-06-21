<?php get_header('galery'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<main class="sections">
    <!-- About -->
    <section>
        <div class="container company">
            <div class="company__title">
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/courone_fleurs.png"
                    alt="couronne de fleurs">
                <h2 class="page-title">
                    <?php the_title(); ?>
                    <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg"
                        alt="divider trefle">
                </h2>
            </div>
        </div>
    </section>

    <section>
        <div class="page-sidebar__galery">
            <div class="news-list__galery">
                <div class="thumbnail">
                    <?php the_post_thumbnail('event-thumbnail-large'); ?>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>