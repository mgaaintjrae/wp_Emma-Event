<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="container">
    <header class="event-header">
      <div>
        <h1 class="event__title"><?php the_title(); ?></h1>
        <!--<div class="event__meta">
          <div class="event__location">Avrillé (49240)</div>
          <div class="event__price">838,00 €/mois</div>-->
          <div class="event__type"><?= get_field('type'); ?></div>
        </div>
        <div class="event__actions">
          <button class="btn btn-filled">Contacter l'agence</button>
          <button class="btn">Appeler</button>
        </div>

        <!--
        <form action="" class="event__form form-2column">
          <div class="form-group">
            <input type="text" id="username" class="form-control">
            <label for="username">Pseudo</label>
          </div>
          <div class="form-group">
            <input type="text" id="email" class="form-control">
            <label for="email">Email</label>
          </div>
          <textarea placeholder="Message" class="form-control full"></textarea>
          <button type="submit" class="btn">Commenter</button>
        </form>
        -->

      </div>
      <div>
        <div class="event__photos js-slider">
          <?php foreach(get_attached_media('image', get_post()) as $image): ?>
            <a href="<?= wp_get_attachment_url($image->ID) ?>">
              <img class="event__photo" src="<?= wp_get_attachment_image_url($image->ID, 'event-carousel'); ?>" alt="">
            </a>
          <?php endforeach ?>           
          </div>
      </div>
    </header>

    <div class="event-body">
      <h2 class="event-body__title"><?= __('Description', 'emmaevent'); ?></h2>
      <div class="formatted">
        <?php the_content(); ?>
      </div>
    </div>

    <!--<section class="event-options">
      <div class="event-option"><img src="area.78237e19.svg" alt=""> Superficie: 93m²</div>
      <div class="event-option"><img src="elevator-fill.117c4510.svg" alt=""> Ascenseur</div>
      <div class="event-option"><img src="rooms.b02e3d15.svg" alt=""> Nbr chambres: 4</div>
      <div class="event-option"><img src="elevator.e0bdbd67.svg" alt=""> Etage: 3</div>
      <div class="event-option"><img src="parking.bb37c0bc.svg" alt=""> Parking: Oui</div>
    </section>-->

  </div>

<?php get_footer(); ?>