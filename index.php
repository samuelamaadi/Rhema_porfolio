<?php
  $page_title = 'Home page';
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
              <a href="#" data-filter=".web">Web</a>
              <a href="#" data-filter=".design">Design</a>
              <a href="#" data-filter=".branding">Branding</a>
              <a href="#" data-filter=".photography">Photography</a>
            </div>
          </div>
        </div>

        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">

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
          
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Build Indoo</h3>
                <span>Photography</span>
              </div>
              <img class="img-fluid" src="assets/img/img_2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Cocooil</h3>
                <span>Branding</span>
              </div>
              <img class="img-fluid" src="assets/img/img_3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Nike Shoe</h3>
                <span>Design</span>
              </div>
              <img class="img-fluid" src="assets/img/img_4.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Kitchen Sink</h3>
                <span>Photography</span>
              </div>
              <img class="img-fluid" src="assets/img/img_5.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Amazon</h3>
                <span>brandingn</span>
              </div>
              <img class="img-fluid" src="assets/img/img_6.jpg">
            </a>
          </div>
        </div>
      </div>
    </section><!-- End  Works Section -->

    <!-- ======= Clients Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">My Clients</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-adobe.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-uber.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-apple.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-netflix.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-nike.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="assets/img/logo-google.png" alt="Image" class="img-fluid"></a>
          </div>

        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">My Services</h3>
            <p>This are what i do and you can trust us with your work</p>
          </div>
        </div>

        <div class="row">

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-cube la-3x mb-4"></span>
            <h4 class="h4 mb-2">Web Design</h4>
            <p>For your website contact us for an awesome and nice site on time,very affordable</p>
            <ul class="list-unstyled list-line">
              <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
              <li>Non pariatur nisi</li>
              <li>Magnam soluta quod</li>
              <li>Lorem ipsum dolor</li>
              <li>Cumque quae aliquam</li> -->
            </ul>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-server la-3x mb-4"></span>
            <h4 class="h4 mb-2">Computer Networking</h4>
            <p>We offer network solution and network setup for offices and institution.</p>
            <ul class="list-unstyled list-line">
              <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
              <li>Non pariatur nisi</li>
              <li>Magnam soluta quod</li>
              <li>Lorem ipsum dolor</li>
              <li>Cumque quae aliquam</li> -->
            </ul>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-laptop la-3x mb-4"></span>
            <h4 class="h4 mb-2">Graphic Design</h4>
            <p>We design printing and online events and many more at Affordable prices </p>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <span class="la la-desktop la-3x mb-4"></span>
            <h4 class="h4 mb-2">Hardware</h4>
            <p>Problems concerning computer hardware is one of our 1st most priority.</p>
            <ul class="list-unstyled list-line">
              <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
              <li>Non pariatur nisi</li>
              <li>Magnam soluta quod</li>
              <li>Lorem ipsum dolor</li>
              <li>Cumque quae aliquam</li> -->
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
      <?php 
        include('parts/quotes.php');
      ?>
    <!-- End Testimonials Section -->

  </main><!-- End #main -->

 <?php 
  include('include/footer.php');
 ?>