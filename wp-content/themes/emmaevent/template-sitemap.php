<?php
/*
Template Name: Sitemap
*/

get_header('sitemap'); ?>

<main class="sections">

    <!-- Plan du site -->
    <section>
        <div class="container">
            <div class="company">
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png"
                        alt="couronne de fleurs" height="575" width="575">
                    <h2 class="page-title">
                        <?php the_title(); ?>
                        <svg class="icon">
                            <use
                                xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                            </use>
                        </svg>
                    </h2>
                </div>
            </div>
    </section>

    <section class="container page-sidebar sitemap__content">
        <!-- Author -->
        <h2 class="sitemap__title"><?php _e('Author', 'emmaevent'); ?></h2>
        <ul>
            <?php wp_list_authors( array(
              'exclude_admin' => false
                )); 
            ?>
        </ul>

        <!-- Pages -->
        <h2 class="sitemap__title"><?php _e('Pages', 'emmaevent'); ?></h2>
        <ul>
            <li>
                <a href="<?php the_permalink(19); ?>" title="Page d'accueil"><?php _e('Home', 'emmaevent'); ?></a>
            </li>
            <li>
                <a href="<?php the_permalink(11); ?>" title="Qui je suis ?"><?php _e('About', 'emmaevent'); ?></a>
            </li>
            <li>
                <?php
        foreach( get_post_types( array('public' => true) ) as $post_type ) {
          if ( in_array( $post_type, array('post','page','attachment') ) ) {
          continue;
          }

          // affiche le titre du CPT
          $pt = get_post_type_object( $post_type );

          echo '<a href="' . esc_attr(get_term_link($pt)) . '" title="Evénements">' . $pt->labels->name . '</a>';

// Récupérer la taxonomie dans une variable
                $taxonomy = 'events';
                
                // Variable avec le get_terms
                $tax_terms = get_terms($taxonomy, array('hide_empty' => false), 'exclude=');
                }
                ?>
            </li>
            <li>
                <ul class="sitemap__taxonomy">

                    <?php
                    // La boucle d'affichage des titres de taxonomy liés au CPT
                    foreach ($tax_terms as $tax_term) {
                    echo '<p>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '"
                            title="' . sprintf( __( " Voir tous les événements dans %s" ), $tax_term->name ) . '" ' .
                            '>' . $tax_term->name.'</a> </p>
                    ';
                    }
                    ?>
                </ul>
            </li>
            <li>
                <a href="<?php the_permalink(156); ?>" title="Galerie"><?php _e('Galery', 'emmaevent'); ?></a>
            </li>
            <li>
                <a href="<?php the_permalink(17); ?>" title="Contactez-moi"><?php _e('Contact', 'emmaevent'); ?></a>
            </li>
            <li>
                <a href="<?php the_permalink(206); ?>" title="Plan du site"><?php _e('Sitemap', 'emmaevent'); ?></a>
            </li>
            <li>
                <a href="<?php the_permalink(41); ?>"
                    title="Mentions légales"><?php _e('Legal disclaimer', 'emmaevent'); ?></a>
            </li>
        </ul>
        <!-- <ul>
            <?php
            // wp_list_pages( array( 
              // 'exclude' => '',
              // 'title_li' => '',
              // )); 
            ?>
        </ul> -->

        <!-- Events CPT -->




    </section>

</main>
<?php get_footer(); ?>