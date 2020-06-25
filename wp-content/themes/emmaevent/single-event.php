<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<main>
    <div class="container">
        <header class="event-header">
            <div>
                <h2 class="event__title"><?php the_title(); ?></h2>
                <h3 class="event__type">Evénement :
                    <?php $type = the_field('type');
                    if( $type ):?>
                    <?php foreach( $types as $type): ?>
                    <a href="<?php the_permalink($type) ?>"><?= esc_attr($type) ?></a></h3>
                <?php endforeach; ?>
                <?php endif ?>
                <div class="thumbnail">
                    <?php the_post_thumbnail('event-thumbnail-large'); ?>
                </div>

            </div>
        </header>

        <div class="event-body">
            <div class="formatted">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="event__back">
            <div class="event__hover">
                <?php if(is_single()) : ?>
                <a href="<?= get_post_type_archive_link( 'taxonomy' ); ?>" class="btn" title="Retour">
                    <svg class="icon">
                        <use
                            xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#arrow-left">
                        </use>
                    </svg>Retour</a>
                <?php endif; ?>
            </div>



        </div>


    </div>
    <?php endwhile; ?>

</main>
<?php get_footer(); ?>