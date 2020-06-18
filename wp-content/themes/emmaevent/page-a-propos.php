<?php get_header('about'); ?>

<main class="sections">
    <!-- Contact -->
    <section>
      <div class="container">
        <div class="company">          
          <div class="company__title">          
          <?php the_post_thumbnail('event-thumbnail'); ?>          
          <h2 class="page-title">
            <?php the_title(); ?>
          </h2>
        </div>
      </div>          
    </section> 
  
    <section>
      <div class="page-sidebar">        
        <div class="news-list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>          
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>     
      </div>
    </section>
</main>
<?php get_footer(); ?>