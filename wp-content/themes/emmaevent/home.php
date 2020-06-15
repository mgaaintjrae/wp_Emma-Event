<?php get_header(); ?>

<div class="container">

  <h1 class="page-title"><?php single_post_title() ?></h1>

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
      <!--<div class="sidebar__widget">
        <div class="sidebar__title">Recherche</div>
        <form action="#" class="form-group form-search">
          <input type="search" placeholder="Rechercher une actualité">
          <button type="submit">
            <svg class="icon">
              <use xlink:href="sprite.14d9fd56.svg#search"></use>
            </svg>
          </button>
        </form>
      </div>-->     

    </aside>
  </div>
  
</div>
<?php get_footer(); ?>