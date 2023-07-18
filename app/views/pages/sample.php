<?php require APPROOT . '/views/inc/header.php'; ?>
  <main id="main">
    <!-- ======= About Section ======= -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sample Created Programs</h2>
          <p>Why not take a look?</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web-desktop">Web and Desktop</li>
              <li data-filter=".filter-mobile">Mobile</li>
              <li data-filter=".filter-arduino">Arduino Programming</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web-desktop">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/e.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sign Language Recognition System</h4>
                <p>Part 1</p>

                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/e.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sign Language System (Part 1)"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/evi.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Motion and Object Detection System</h4>
                <p>Part 1</p>
                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/evi.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Motion And Object Detection (Security System Part 1)"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-arduino">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/doorlock.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Motion and Object Detection System</h4>
                <p>Part 2</p>
                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/doorlock.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Automted Security Lock"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/menu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Motion and Object Detection System</h4>
                <p>Part 3</p>
                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/menu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Secuirty System"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web-desktop">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/f.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sign Language Recognition System</h4>
                <p>Part 2</p>
                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/f.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sign Language System"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
            <div class="portfolio-wrap">
              <img src="<?php echo URLROOT; ?>/img/obj.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Object Detection System</h4>
                <div class="portfolio-links">
                  <a href="<?php echo URLROOT; ?>/img/obj.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Object Detection"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- End Contact Section -->
  </main><!-- End #main -->
<?php require APPROOT . '/views/inc/footer.php'; ?>