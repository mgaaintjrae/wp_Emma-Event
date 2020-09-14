<?php get_header(); ?>

<main class="container" >

  <h2 class="page-title">
  <?php get_the_category(); ?>
    <?php if (is_category()) : ?>
      <?php single_cat_title() ?>
    <?php elseif (is_search()) : ?>
      <?= sprintf(__('Search results for "%s"', 'emmaevent'), get_search_query()); ?>
    <?php else : ?>
      <?php single_post_title() ?>
    <?php endif ?>
    <?php $events= get_terms(['taxonomy' => 'events_category']); ?>
    <?php foreach($events as $event): ?>
      <?= is_tax('events_category', $event->term_id)?><?= $event->name ?>
    <?php endforeach; ?>
  </h2>

  <div class="page-sidebar">
    <div>
      <div class="news-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>          
            <?php get_template_part('template-parts/post'); ?>
          <?php endwhile; ?>

          <?= emmaevent_paginate() ?>

        <?php else : ?>
          <h2><?= __('No posts found', 'emmaevent') ?></h2>
        <?php endif; ?>
      </div>
    </div>

    <aside class="sidebar">
      <?php dynamic_sidebar('blog'); ?>     
    </aside>
  </div>

</main>
<?php get_footer(); ?>