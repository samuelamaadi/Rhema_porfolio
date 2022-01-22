<?php 
$page_title = 'Blog_details';
include('include/heading.php');
?>


<div class="container">
  <div class="row content"> 
    <div class="col-sm-9">
      <h4><small>POST DETAILS</small></h4>
      <hr>
<?php 
 // getting super GLOBALS variable here
 if (isset($_GET['id'])) {
   $id = $_GET['id'];

  $query_ret = "SELECT * FROM article a, article_category ac, user u WHERE a.category_id = ac.cat_id AND a.user_id = u.user_id";
  $result = $conn->query($query_ret);
  $data_retrieve = $result->fetch_array();
  $article =   $data_retrieve['article_title'];
  $content =  $data_retrieve['content'];
  $meta_desc = $data_retrieve['meta_description'];
  $day = $data_retrieve['day'];
  $month = $data_retrieve['month'];
  $year = $data_retrieve['year'];
  $image = $data_retrieve['image'];
  $firstname = $data_retrieve['firstname'];
  $lastname = $data_retrieve['lastname'];
  $author = $firstname.' '.$lastname;
  $category = $data_retrieve['category'];
  $date = $day.' '.$month.' '.$year;
echo '<hr>
      <h2>'.$article.'</h2>
      <h6><span class="glyphicon glyphicon-time"></span> Post by: '.$author.', '.$date.'</h6>
      <h5><span class="label label-danger">'.$meta_desc.'</span></h5><br>
      <p>'.$content.'</p>
      <img src="assets/img/'.$image.'" alt="" class="img-rounded">';
    }
  ?>
      <br><br>
      
      <hr>

<!-- php code here -->
<?php 
  include('include/functions.php');
  include('include/constant.php');
  // setting a flag to false here
  $error = FALSE;
  if (isset($_POST['submit'])) {
  
  // setting form variables here
  $fullname = sanitizeform($_POST['fullname']);
  $email = sanitizeform($_POST['email']);
  $comment = $_POST['comment'];
  $day = date('d');
  $month = date('M');
  $year = date('Y');
  $time = date('h:m:sa');
  $profile = $_FILES['profile']['name'];


  $img_folder = IMG_FD.$profile;
  if(move_uploaded_file($_FILES['profile']['tmp_name'], $img_folder));

 if (empty($fullname)) {
   $error = TRUE;
   $fullname_err = 'enter fullname not nickname';
 }elseif(!preg_match('/^[a-zA-Z ]*$/', $fullname)) {
   $error = TRUE;
   $fullname_err = 'only letters and spaces are allowed';
 }

 if (empty($email)) {
   $error = TRUE;
   $email_err = 'Provide email here';
 }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $error = TRUE;
   $email_err = 'wrong format';
 }

 if(empty($comment)){
  $error = TRUE;
  $comment_err = 'enter your comment here';
 }


  if (!$error) {
  $query = "INSERT INTO comment
  (fullname, email, comment, day, month, year, time_post)
  VALUES
  ('$fullname', '$email', '$comment', '$day', '$month', '$year', '$time')";
  $result = $conn->query($query);

  if($result){
    echo "<script>alert('sent successfully', '_self')</script>";
  }
  }
  }

?>
      <h4>Leave a Comment:</h4>
      <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

        <div class="row">
        <div class="col-md-6">       
          <div class="form-group">
            <label for="" style="color: red;"><?php if(!empty($fullname_err)){ echo $fullname_err; }?></label>
            <input class="form-control" name="fullname" type="text" placeholder="FULLNAME" value="">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="" style="color: red;"><?php if(!empty($email_err)){ echo $email_err; }?></label>
            <input class="form-control" type="text" name="email" placeholder="EMAIL">
          </div>
        </div>
        </div>

        <div class="form-group">
          <label for="" style="color: red;"><?php if(!empty($comment_err)){ echo $comment_err; }?></label>
          <textarea class="form-control" rows="3" name="comment"></textarea>
        </div>
       
        <input type="submit" class="btn btn-success pull-center" value="Submit" name="submit">

        <input type="file" class="btn btn-default" name="profile">

      </form>
      <br><br>
      
      <!-- calling the comments from the mysql database -->
      <p><span class="badge">10</span> Comments:</p><br>
     
      <div class="row">
      <?php 
        $query_ret = "SELECT * FROM comment ORDER BY comment_id DESC LIMIT 10";
        $ret_result = $conn->query($query_ret);
        while ($data_ret = $ret_result->fetch_assoc()){
        $fullname = $data_ret['fullname'];
        $email = $data_ret['email'];
        $comment = $data_ret['comment'];
        $date = $data_ret['day'].', '.$data_ret['month'].', '.$data_ret['year'];
        $time = $data_ret['time_post'];
        $profile = $data_ret['profile'];

      
        echo '<div class="col-sm-2 text-center">
          <img src="images/'.$profile.'" class="img-circle" height="40" width="40" alt="Avatar" style="border-radius: 100%;">
        </div>
        <div class="col-sm-10">
          <h6>'.$fullname.'<small>  '.$date.', '.$time.'</small></h6>
          <p>'.$comment.'</p>
          <br>
        </div>';
       }
      ?>

      </div>
    </div>
   

   <div class="col-sm-3 sidenav">
      <h4>Rhema Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="my_blog.php">BACK</a></li>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="works.php">Works</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">search</button>
        </span>
      </div>
      <br><br>
      <hr> 

      <div class="other-news">
        <div class="row">
            <div class="col-lg-4">
              <div
                class="d-flex justify-content-between align-items-center"
              >
                <div class="card-title">
                  Latest Video
                </div>
                <p class="mb-3">See all</p>
              </div>
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <div class="div-w-80 mr-3">
                  <div class="rotate-img">
                    <img src="images/person_2.jpg"  alt="thumb" class="img-fluid" width="65" 
                    />
                  </div>
                </div>

                <h3 class="font-weight-600 mb-0">
                  Apple Introduces Apple Watch
                </h3>
              </div>
              <div
                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
              >
                <div class="div-w-80 mr-3">
                  <div class="rotate-img">
                    <img
                      src="assets/images/home_12.jpg"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <h3 class="font-weight-600 mb-0">
                  SEO Strategy & Google Search
                </h3>
              </div>
              <div
                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
              >
                <div class="div-w-80 mr-3">
                  <div class="rotate-img">
                    <img
                      src="images/person_2.jpg"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <h3 class="font-weight-600 mb-0">
                  Cycling benefit & disadvantag
                </h3>
              </div>
              <div
                class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
              >
                <div class="div-w-80 mr-3">
                  <div class="rotate-img">
                    <img
                      src="assets/images/home_14.jpg"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <h3 class="font-weight-600">
                  The Major Health Benefits of
                </h3>
              </div>
              <div
                class="d-flex justify-content-between align-items-center pt-3"
              >
                <div class="div-w-80 mr-3">
                  <div class="rotate-img">
                    <img
                      src="assets/images/home_15.jpg"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <h3 class="font-weight-600 mb-0">
                  Powerful Moments of Peace
                </h3>
              </div>
            </div>
        </div>
      </div>


    </div>

  </div>
</div>

<hr>





  <?php 
        include('parts/quotes.php');
      ?>
    <!-- End Testimonials Section -->

  </main><!-- End #main -->

 <?php 
  include('include/footer.php');
 ?>

 <style>
 	.sidenav{
 		border-left: 2px solid silver;
 	}
 </style>