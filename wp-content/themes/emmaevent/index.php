<?php get_header(); ?>

  <main class="sections">
    <!-- Company presentation -->
    <section>
      <div class="container">
        <div class="company">
          <img src="assets/img/courone_fleurs.png" alt="couronne de fleurs" class="crown__flowers">
          <div class="company__title">
            <h2>Présentation</h2>
            <img src="assets/img/divider_trefle.svg" alt="divider trèfle">
          </div>

          <p>nulla consectetur ut dapibus euismod quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip
            nisl, mollis neque. scelerisque elit, quis malesuada gravida mollis. nulla consectetur ut dapibus euismod
            quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip nisl, mollis neque. scelerisque elit,
            quis malesuada gravida mollis,
            nulla consectetur ut dapibus euismod quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip
            nisl, mollis neque. scelerisque elit, quis malesuada gravida mollis</p>
          <p>nulla consectetur ut dapibus euismod quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip
            nisl, mollis neque. scelerisque elit, quis malesuada gravida mollis. nulla consectetur ut dapibus euismod
            quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip nisl, mollis neque. scelerisque elit,
            quis malesuada gravida mollis,
            nulla consectetur ut dapibus euismod quis, cillum ac eros cillum et velit fermentum. enim eget ut aliquip
            nisl, mollis neque. scelerisque elit, quis malesuada gravida mollis</p>
        </div>
    </section>

    <!-- Events -->
    <section class="container__event">
      <div class="events">
        <div class="event__title">
          <h2>Evénements</h2>
          <img src="assets/img/divider_trefle.svg" alt="divider trèfle">
        </div>


        <div class="events__grid">
          <a class="event " href="#" title="Organisation de mariage">
            <div class="event__image">
              <img src="https://picsum.photos/475.jpg" alt="">
            </div>
            <div class="event__body">
              <h3 class="event__category">Organisation de mariage</h3>
            </div>
          </a>

          <a class="event " href="#" title="Evénements privés">
            <div class="event__image">
              <img src="https://picsum.photos/475.jpg" alt="">
            </div>
            <div class="event__body">
              <h3 class="event__category">Evénements privés</h3>
            </div>
          </a>

          <a class="event " href="#" title="Evénements professionels">
            <div class="event__image">
              <img src="https://picsum.photos/475.jpg" alt="">
            </div>
            <div class="event__body">
              <h3 class="event__category">Evénements professionels</h3>
            </div>
          </a>
        </div>
      </div>
    </section>


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
    <?php //echo do_shortcode('[metaslider id="29"]'); ?>
    <?php echo do_shortcode('[masterslider id="1"]'); ?>
  </main>
  
<?php get_footer(); ?>