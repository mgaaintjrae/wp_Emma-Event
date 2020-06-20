<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>

  <main class="sections">
    <!-- Company presentation -->
    <section>
      <div class="container">
        <div class="company">          
          <div class="company__title">          
          <?php the_post_thumbnail('event-thumbnail'); ?>          
          <h2 class="page-title">
            Présentation
            <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg" alt="divider trefle">
          </h2>            
          </div>
          <?php the_content(); ?>
        </div>
        
      </div>          
    </section>

    <!-- Fantasy -->
    <div class="fantasy">
    <div class="deco__left">
      <!--<img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/branche_feuilles_left.png" alt="branche feuilles">-->
    </div>
    <div class="deco__right">
    <!--<img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/branche_feuilles_right.png" alt="branche feuilles">-->
    </div>
    </div>

    <!-- Events -->
    <?php if(have_rows('recent_events')): while(have_rows('recent_events')): the_row() ?>
    <section class="container__event">
      <div class="events">
        <div class="event__title">
          <h2><?php the_sub_field('title') ?></h2>
          <?php the_sub_field('image') ?>
          <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg" alt="divider trèfle">          
        </div>
        <div class="event__content">
        <?php the_sub_field('description') ?>  
        </div>      
            
        <div class="events__grid">
        <?php
        $query = new WP_Query([
          'post_type' => 'event',
          'posts_per_page' => 3
        ]);        
        
        while($query->have_posts()){
          $query->the_post();
          get_template_part('template-parts/event');
        }
        wp_reset_postdata(); 
        ?>     
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>


    <!-- <section class="container quote">
      <div class="quote__title">Ce que pensent mess clients</div>
      <div class="quote__body">
        <div class="quote__image">
          <img src="#" alt="">
          <div class="quote__author">Stephanie</div>
        </div>
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, aspernatur sit provident eius, sint, itaque rem blanditiis perferendis quod doloremque maiores architecto. Amet dolore itaque dolores esse facere sint error.</p>
        </blockquote>
      </div>

      <a class="quote__action btn" href="#">
        Mon événement
        <svg class="icon">
          <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
        </svg>
      </a>
    </section> -->

    <!-- Galerie slider -->    
    <?php echo do_shortcode('[masterslider id="1"]'); ?>
  </main>
  
<?php endwhile; ?>
<?php get_footer(); ?>