<?php

  $page_title = 'Contact Us';
  include('include/heading.php');

?>

  <main id="main">

    <section class="section pb-5">
      <div class="container">

        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Contact</h2>
            <p class="mb-0">Send us your suggestions and comments below for improvement.
            </p>
          </div>

        </div>
       
       <?php
        // including contact php code here
        include('parts/contact.php');
       ?>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name <span class="text-danger"><?php if (!empty($name_err)) {
                   echo $name_err;
                  }?></span></label>
                  <input type="text" name="name" class="form-control"/>
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <label for="name">Email <span class="text-danger"><?php if (!empty($email_error)){ echo $email_error;
                  } ?>
                 </span></label>
                  <input type="email" class="form-control" name="email"/>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                  <label for="name">Subject <span class="text-danger"><?php if (!empty($subject_err)) {
                    echo $subject_err;
                  }?></span></label>
                  <input type="text" class="form-control" name="subject"/>
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="submit" class="readmore d-block w-100 btn btn-primary" name="submit" value="Send Message">
                </div>
              </div>

            </form>

          </div>

          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>RCC - Amanokrom-Akuapim, Eastern Region
                Ghana</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+233 551594841 / 577215179</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>samuelamaadi12@gmail.com</span>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <?php 
    include('include/footer.php');
  ?>