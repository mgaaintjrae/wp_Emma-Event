<?php get_header('single--event'); ?>


<main class="sections" role="main">
    <?php while(have_posts()): the_post(); ?>
    <section>
        <div class="container">
            <div class="event-header">
                <h2 class="event__title"><?php the_title(); ?></h2>
                <h3 class="event__type">Evénement :
                    <?php $type = the_field('type');
                    if( $type ):?>
                    <?php foreach( $types as $type): ?>
                    <a href="<?php the_permalink($type) ?>"><?= esc_attr($type) ?></a></h3>
                <?php endforeach; ?>
                <?php endif ?>
                <div class="thumbnail event__photos">
                    <?php the_post_thumbnail('event-thumbnail-large'); ?>
                </div>
            </div>

            <div class="event-body">
                <div class="formatted">
                    <?php the_content(); ?>
                    <p>Publié le <?php the_time('d F Y'); ?> par <a href="<?php the_permalink(11) ?>"
                            title=" à propos de moi">Emma-Event</a>
                    </p>
                    <!-- Section share -->
                    <?php get_template_part('template-parts/share'); ?>
                </div>



                <div class="post-navigation">
                    <?php
                the_post_navigation(
                    array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post :', 'emmaevent' ) .
                    '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'emmaevent' ) . '</span> <br />' .
                '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post :', 'emmaevent' ) .
                    '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'emmaevent' ) . '</span> <br />' .
                '<span class="post-title">%title</span>',
                )
                );
                ?>
                </div>
            </div>

            <div class="event__back">
                <div class="event__hover">
                    <?php if(is_single()) : ?>
                    <a href="<?php the_permalink(227) ?>" class="btn" title="Retour aux événements">
                        <svg class="icon">
                            <use
                                xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#arrow-left">
                            </use>
                        </svg>Retour</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>