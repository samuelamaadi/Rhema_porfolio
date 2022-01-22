<?php
  $page_title = 'Our Works';
  include('include/heading.php');
?>

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey, I'm Samuel Amaadi</h2>
            <p class="mb-0">Freelance Creative, System Adminstrator &amp; Professional Graphics Designer</p>
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <!-- <a href="#" data-filter=".web">Web</a>
              <a href="#" data-filter=".design">Design</a>
              <a href="#" data-filter=".branding">Branding</a>
              <a href="#" data-filter=".photography">Photography</a> -->
            </div>
          </div>
        </div>

        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up"         data-aos-delay="200">

        <?php 
          $query = "SELECT * FROM works";
          $result = $conn->query($query);
          while($data = $result->fetch_array()){
            $work_id = $data['work_id'];
            $work_name = $data['work_name'];
            $work_category = $data['work_category'];
            $images = $data['images'];

          echo '<div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php?id='.$work_id.'" class="item-wrap fancybox">
              <div class="work-info">
                <h3>'.$work_name.'</h3>
                <span>'.$work_category.'</span>
              </div>
              <img class="img-fluid" src="assets/img/'.$images.'">
            </a>
          </div>';
           }
          ?>
        </div>

      </div>
    </section><!-- End  Works Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
      <div class="container">

        <div class="owl-carousel testimonial-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial">
              <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                  explicabo inventore.</p>
              </blockquote>
              <p>&mdash; Jean Hicks</p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial">
              <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                  explicabo inventore.</p>
              </blockquote>
              <p>&mdash; Chris Stanworth</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
    include('include/footer.php');
  ?>
  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>