<?php /**
* Template Name: Contact
* Template Post Type: page
*
* @package WordPress
* @subpackage Emma Event
* @since Emma Event 1.0
*/

get_header('contact'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class="sections">
    <!-- Contact -->
    <section>
        <div class="container">
            <div class="company">
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png"
                        alt="couronne de fleurs" loading="lazy" height="575" width="575">
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
        </div>
    </section>

    <section class="contact__form">
        <div class="page-sidebar">
            <div class="thumbnail">
                <?php the_post_thumbnail('event-thumbnail-large'); ?>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
            <div class="news-list">
                <?php echo do_shortcode( '[contact-form-7 id="161" title="Formulaire de contact"]' ); ?>

                <div class="info">
                    <div class="item">
                        <svg class="icon">
                            <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#phoneGold">
                            </use>
                        </svg>
                        <h6>Téléphone :
                            </br>
                            <span>06 25 37 34 34</span>
                        </h6>
                    </div>
                    <div class="item">
                        <svg class="icon">
                            <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#mapGold">
                            </use>
                        </svg>
                        <h6>Adresse :
                            </br>
                            <span>72000
                                </br>
                                Paris
                            </span>
                        </h6>
                    </div>
                    <div class="item">
                        <svg class="icon">
                            <use
                                xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#envelopGold">
                            </use>
                        </svg>
                        <h6>Mail :
                            </br>
                            <span>emmaevent@odns.fr</span>
                        </h6>
                    </div>
                    <!-- Social icon-->
                    <div class="social-icon">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" title="Facebook">
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#fbGold">
                                </use>
                            </svg>
                        </a>
                        <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" title="Instagram">
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#instaGold">
                                </use>
                            </svg>
                        </a>
                        <a href="https://pinterest.fr/" target="_blank" rel="noopener noreferrer" title="Pinterest">
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#pinteGold">
                                </use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>