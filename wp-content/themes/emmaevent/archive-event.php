<?php get_header() ?>

<div class="container page-events">
    <!--<div class="search-form">-->
  <h1 class="search-form__title">Evénements</h1>
  <p>Retrouver tous mes événements en <strong>Ile de France</strong></p>
  
<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
  <div class="event__image">
    <?php the_post_thumbnail('event-thumbnail-large') ?>   
    </div>     
  </a>  
<?php $i++; endwhile; ?>
<?php endif; ?> 

</div>

<?php if(get_query_var('paged', 1) > 1): ?>
<?= emmaevent_paginate() ?>
<?php elseif($nextPostLink = get_next_posts_link(__('More events +', 'emmaevent'))): ?>
  <div class="pagination">
  <?= $nextPostLink  ?>    
  </div>
<?php endif; ?>  
  
<?php get_footer() ?>