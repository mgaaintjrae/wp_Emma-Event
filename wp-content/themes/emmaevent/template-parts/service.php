<section class="page-service container">
    <div class="page-sidebar prestation">
        <h1><?php the_title(); ?></h1>
        <div class="news-list excerpt">
            <?php //the_excerpt(); 
            ?>
        </div>
        <div class="thumbnail">
            <?php the_post_thumbnail('event-thumbnail-large'); ?>
        </div>
        <div class="news-list">
            <?php the_content(); ?>
        </div>
        <div class="header__cta">
            <a href="<?php the_permalink(17) ?>" class="cta__btn-gold btn">CONTACTEZ-MOI</a>
        </div>
    </div>
</section>