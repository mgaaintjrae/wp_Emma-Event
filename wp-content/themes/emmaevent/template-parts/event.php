<a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
    <div class="event__image">
        <?php the_post_thumbnail('event-thumbnail') ?>
    </div>
    <?php $events = get_terms(['taxonomy' => 'events']); ?>
    <div class="event__body">
        <h3 class="event__category"><?= get_queried_object()->name ?></h3>
    </div>
</a>