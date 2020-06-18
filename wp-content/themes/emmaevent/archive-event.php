<?php get_header() ?>

<h1 class="search-form__title">Evénements</h1>
<div>Retrouver tous mes événements en <strong>Ile de France</strong></div>

<div class="container page-events events__grid">  
  
<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
       <?php get_template_part('template-parts/event'); ?>
<?php endwhile; ?>
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