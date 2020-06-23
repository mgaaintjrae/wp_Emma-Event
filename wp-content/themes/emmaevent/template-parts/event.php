<a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
    <div class="event__image">
        <?php the_post_thumbnail('event-thumbnail') ?>
    </div>
    <div class="event__body">
        <?php $type = the_field('type');
                    if( $type ):?>
        <?php foreach( $types as $type): ?>
        <h3 class="event__type"><?= $type ?></h3>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</a>