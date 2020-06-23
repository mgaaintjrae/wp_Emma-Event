<div class="content">
    <a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">

        <div class="event__image content-image">
            <div class="content-overlay"></div>
            <figure><?php the_post_thumbnail('event-thumbnail') ?></figure>
        </div>
        <div class="content-details fadeIn-bottom">
            <div class="event__body content-title">
                <?php $type = the_field('type');
                    if( $type ):?>
                <?php foreach( $types as $type): ?>
                <h3 class="event__type">
                    <?php $type ?>
                </h3>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </a>
</div>