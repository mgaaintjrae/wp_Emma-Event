<?php get_header('contact'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class="sections">
    <!-- Contact -->
    <section>
        <div class="container">
            <div class="company">
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