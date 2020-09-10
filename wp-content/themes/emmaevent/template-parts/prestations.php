<div class="presta__grid grid">
                    <div>
                        <?php
                        $id1 = 246;
                        $billet1 = get_post($id1);
                        // $title1 = $billet1->post_title;
                        $title1 = 'Clé en main';
                        $lien1 = get_permalink($id1);
                        $excerpt1 = $billet1->post_excerpt;
                        $urlImage1 = get_post_thumbnail_id(246);
                        $urlImage1 = wp_get_attachment_image_src($urlImage1, 'service-thumbnail');
                        $urlImage1 = $urlImage1[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage1 ?>" alt="emma-event-organisation-de-mariage-ile-de france-paris-prestation-cle-en main" />
                            <figcaption>
                                <h3>
                                    <?= $title1 ?>
                                </h3>
                                <p>
                                    <?= $excerpt1 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien1 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id2 = 252;
                        $billet2 = get_post($id2);
                        // $title2 = $billet2->post_title;
                        $title2 = 'Partielle';
                        $lien2 = get_permalink($id2);
                        $excerpt2 = $billet2->post_excerpt;
                        $urlImage2 = get_post_thumbnail_id(252);
                        $urlImage2 = wp_get_attachment_image_src($urlImage2, 'service-thumbnail');
                        $urlImage2 = $urlImage2[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage2 ?>" alt="emma-event-organisation-de-mariage-ile-de-france-paris-prestation-partielle" />
                            <figcaption>
                                <h3>
                                    <?= $title2 ?>
                                </h3>
                                <p>
                                    <?= $excerpt2 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien2 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id3 = 254;
                        $billet3 = get_post($id3);
                        // $title3 = $billet3->post_title;
                        $title3 = 'Jour J';
                        $lien3 = get_permalink($id3);
                        $excerpt3 = $billet3->post_excerpt;
                        $urlImage3 = get_post_thumbnail_id(254);
                        $urlImage3 = wp_get_attachment_image_src($urlImage3, 'service-thumbnail');
                        $urlImage3 = $urlImage3[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage3 ?>" alt="emma-event-organisation-de-mariage-ile-de-france-paris- prestation-jour-j" />
                            <figcaption>
                                <h3>
                                    <?= $title3 ?>
                                </h3>
                                <p>
                                    <?= $excerpt3 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien3 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id4 = 256;
                        $billet4 = get_post($id4);
                        // $title4 = $billet4->post_title;
                        $title4 = 'Conseils';
                        $lien4 = get_permalink($id4);
                        $excerpt4 = $billet4->post_excerpt;
                        $urlImage4 = get_post_thumbnail_id(256);
                        $urlImage4 = wp_get_attachment_image_src($urlImage4, 'service-thumbnail');
                        $urlImage4 = $urlImage4[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage4 ?>" alt="emma-event-organisation-de-mariage-ile-de-france-paris-prestation-conseil" />
                            <figcaption>
                                <h3>
                                    <?= $title4 ?>
                                </h3>
                                <p>
                                    <?= $excerpt4 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien4 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>