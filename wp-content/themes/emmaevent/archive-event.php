<?php get_header() ?>

<div class="container page-events">
    <div class="search-form">
  <h1 class="search-form__title">Evénements</h1>
  <p>Retrouver tous mes événements en <strong>Ile de France</strong></p>
  <!--<hr>
  <form action="listing.html" class="search-form__form">
    <div class="search-form__checkbox">
      <div class="form-check form-check-inline">
        <input class="form-check-input" checked="" type="radio" name="type" id="buy" value="buy">
        <label class="form-check-label" for="buy">Acheter</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="type" id="rent" value="rent">
        <label class="form-check-label" for="rent">Louer</label>
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="city" placeholder="Montpellier">
      <label for="city">Ville</label>
    </div>
    <div class="form-group">
      <input type="number" class="form-control" id="budget" placeholder="100 000 €">
      <label for="budget">Prix max</label>
    </div>
    <div class="form-group">
      <select name="kind" id="kind" class="form-control">
        <option value="flat">Appartement</option>
        <option value="villa">Villa</option>
      </select>
      <label for="kind">Type</label>
    </div>
    <div class="form-group">
      <input type="number" class="form-control" id="rooms" placeholder="4">
      <label for="rooms">Pièces</label>
    </div>
    <button type="submit" class="btn btn-filled">Rechercher</button>
  </form>-->
</div>

<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
  <div class="event__image">
    <?php the_post_thumbnail('event-thumbnail') ?>        
  </a>
<?php endwhile; ?>
<?php endif; ?> 

  </div>

<?php if(get_query_var('paged', 1) > 1): ?>
<?= emmaevent_paginate() ?>
<?php elseif($nextPostLink = next_posts_link(__('More events +', 'emmaevent'))): ?>
  <div class="pagination">
  <?= $nextPostLink  ?>    
  </div>
<?php endif; ?>  
  
<?php get_footer() ?>