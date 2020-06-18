<?php get_header(); ?>



<div class="container">

<h1 class="page-title"><?= get_queried_object()->name ?></h1>
<p><?= get_queried_object()->description ?></p>
  
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

    <!--<aside class="sidebar">
      <?php //dynamic_sidebar('blog'); ?>     
    </aside>-->
  </div>

</div>
<?php get_footer(); ?>