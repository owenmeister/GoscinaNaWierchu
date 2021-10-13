<?php get_header(); ?>

    <!-- Main -->
    <main id="main" class="dark">
      <h2 class="section-title">O nas, okolica i atrakcje</h2>
      <p class="main_pharagraph">Wszystkich gości serdecznie zapraszamy do wypoczynku w naszym Pensjonacie!<br>Do państwa dyspozycji oddajemy X pokoi oraz przytulny ośmio - osobowy apartament o podwyższonym standardzie.</p>
      <div class="articles">
        <div class="article-holder">
        <img src="img/murzasichleski.jpg" alt="WYCIĄG_MURZASICHLE">
        <div class="article-info">
          <h2>Stacje narciarskie w pobliżu</h2>
          <p>Gościna na Wierchu znajduje się w dogodnym miejscu na zimowe szaleństwo! Śnieg utrzymuje się tutaj zwykle od grudnia do marca. Obiekt położony jest w odległości około 100m od trzech kompleksów narciarskich:<br>
          - <a href="https://hajduk-ski.pl/"> Stacja narciarska "Hajduk Ski"</a>,<br>
          - <a href="https://murzasichle-ski.pl/">Stacja narciarska "Murzasichle Ski"</a>,<br>
          - Stacja narciarska "Na Budzowym Wierchu".</p>
        </div>
        </div>
        <div class="article-holder row_reverse">
          <img src="img/wyciag.jpg" alt="WYCIAG_CICHE">
          <div class="article-info">
            <h2>Stacje narciarskie w okolicy</h2>
            <p>Dodatkowo możemy udać się na stacje narciarskie położone w niedalekiej odległości, w pobliskich miejscowościach takich jak:<br>
              - <a href="https://maleciche.com/">Stacja narciarska "Małe Ciche"</a> - położona 3km od obiektu,<br>
              - <a href="https://rusin-ski.pl/">Stacja narciarska "Rusin - Ski"</a> - położona 7km od obiektu,<br>
              - <a href="https://www.skisuche.com/">Stacja narciarska "Suche Ski"</a> - położona 5km od obiektu,<br>
              - <a href="https://www.pkl.pl/kasprowy-wierch/kasprowy.html">Stacja dolna kolejki na Kasprowy Wierch</a> - położona 9km od obiektu.</p>
          </div>
          </div>
      </div>
    </main>
    <!-- Main -->
    <!-- Slogan -->
    <section id="portfolio-info">
      <div class="info-box">
        <i class="far fa-parking"></i>
        <div class="info-inside">
          <p><b>20</b></p>
          <p class="info-inside-info">Miejsc parkingowych</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fal fa-home-alt"></i>
        <div class="info-inside">
          <p><b>8</b></p>
          <p class="info-inside-info">Dostępnych pokoi</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fas fa-star"></i>
        <div class="info-inside">
          <p><b>90+</b></p>
          <p class="info-inside-info">Pozytywnych opinii</p>
        </div>
      </div>
      <div class="info-box">
        <i class="fas fa-wifi"></i>
        <div class="info-inside">
          <p><b>Darmowe</b></p>
          <p class="info-inside-info">Wi-Fi</p>
        </div>
      </div>
    </section>
    <!-- Slogan -->
    <!-- Galeria -->
    <section id="gallery" >
        <h2 class="section-title">Galeria</h2>
        <section id="gallery" class="grid-item gallery">
              <?php echo do_shortcode('[AGAL id=15]'); ?>
      </section>
    </section>
    <!-- Galeria -->
    <!-- Opinie -->
    <section id="reviews" class="dark" style="height: 80vh;">
      <h2 class="section-title">Opinie</h2>
		<?php echo do_shortcode( '[wprevpro_usetemplate tid="1"]' ); ?>
    </section>
    <!-- Opinie -->
    <!-- Kontakt -->
    <aside id="contact">
      <h2 class="section-title">Kontakt</h2>
      <!-- Kontakt info -->
      <div class="contact-info">
        <div class="card">
          <i class="card-icon far fa-envelope"></i>
          <p>goscinanawierchu@gmail.com</p>
        </div>
  
        <div class="card">
          <i class="card-icon fas fa-phone"></i>
          <p>606-355-449</p>
        </div>
  
        <div class="card">
          <i class="card-icon fas fa-map-marker-alt"></i>
          <p>Budzowa 40C, 34-531 Murzasichle</p>
        </div>
      </div>
      <!-- Kontakt formularz -->
            <form action="#" class="contact-form">
        <?php echo do_shortcode('[wpforms id="6"]'); ?>
      </form>
    </aside>

<?php get_footer(); ?>