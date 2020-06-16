<?php get_header() ?>

<div class="container page-properties">
    <div class="search-form">
  <h1 class="search-form__title">Agence immo Montpellier</h1>
  <p>Retrouver tous nos biens sur le secteur de <strong>Montpellier</strong></p>
  <hr>
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
  </form>
</div>

<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
  <div class="event__image">
    <?php the_post_thumbnail('event-thumbnail') ?>
      <img src="https://i.picsum.photos/id/30/385/220.jpg" alt="">
    
  </div>
  <!--<div class="event__body">
    <div class="event__location">34000 Montpellier</div>
    <h3 class="event__title">Maison 4 pièce(s) - 10m²</h3>
    <div class="event__price">45 000 €</div>-->
  </div>
</a>
<?php endwhile; ?>
<?php endif; ?> 
    
  </div>

  <div class="pagination">
    <a href="#" class="btn">Voir plus d'événements +</a>
  </div>
  
<?php get_footer() ?>