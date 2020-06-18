<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="container">
    <header class="event-header">
      <div>
        <h1 class="event__title"><?php the_title(); ?></h1>        
          <div class="event__type">
          <?php $categories = get_the_category();
                    if (!empty($categories)) :
                    ?><a class="news__tag" href="<?php get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a></div>
                    <?php endif ?>
        </div>      
      
      <div>
        <div class="event__photos js-slider">
          <?php foreach(get_attached_media('image', get_post()) as $image): ?>
            <a href="<?= wp_get_attachment_url($image->ID) ?>">
              <img class="event__photo" src="<?= wp_get_attachment_image_url($image->ID, 'event-carousel'); ?>" alt="">
            </a>
          <?php endforeach; ?>           
          </div>
      </div>
    </header>

    <div class="event-body">
      
      <div class="formatted">
        <?php the_content(); ?>
      </div>
    </div>

  </div>
  <?php endwhile; ?>
<?php get_footer(); ?>