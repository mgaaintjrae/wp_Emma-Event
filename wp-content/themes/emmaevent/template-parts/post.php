<article class="news">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__image">
      <?php the_post_thumbnail() ?>
    </a>
  <?php endif ?>
  <div class="news__body">
    <div class="news__header">
      <?php $categories = get_the_category();
      if (!empty($categories)) :
      ?>
        <a class="news__tag" href="<?php get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
      <?php endif ?>
      <a class="news__title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
      <div class="news__date"><?= sprintf(__('Published on %s', 'emmaevent'), get_the_date()) ?></div>
    </div>
    <div class="news__content">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink() ?>" class="news__action">
      Lire la suite
      <?= emmaevent_icon('arrow') ?>
    </a>
  </div>
</article>