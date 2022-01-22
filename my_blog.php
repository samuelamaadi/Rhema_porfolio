<?php 

$page_title = 'my personal blog';
include ('include/heading.php');

?>

<style>
	h1,h2,h3,h4,h5,p{
		text-align: justify;
	}

	.container h3,h1,p{
		text-align: center;
	}
  .panel-title{
  	text-align: center;
  }
	.jumbotron{
		padding: 20px;
	}

	#images{
		max-width: 100%;
		margin-left: 30px;
	}
</style>
<!-- updating tech news in the blog page -->

<div class="container">
<div class="jumbotron">
  <div class="container text-center">
    <h1>Our Blog</h1>
    <p>All news on TECH are available here!!! </p>
  </div>
</div>
  <!-- coding php for blog here -->
 <?php 
  // php code here
 $query = "SELECT * FROM article a, article_category ac, user u WHERE a.category_id = ac.cat_id AND a.user_id = u.user_id";
 $result = $conn->query($query);
 $data_retrieve = $result->fetch_array();
 $article_id = $data_retrieve['article_id'];
 $article_title = $data_retrieve['article_title'];
 $content = $data_retrieve['content'];
 $image_desc = $data_retrieve['image_description'];
 $day = $data_retrieve['day'];
 $month = $data_retrieve['month'];
 $year = $data_retrieve['year'];
 $image = $data_retrieve['image'];
 $category = $data_retrieve['category'];
 $firstname = $data_retrieve['firstname'];
 $lastname = $data_retrieve['lastname'];
 $author = $firstname.' '.$lastname;
 $date = $day.' '.$month.' '.$year;
 ?> 
<div class="container">
  <h3 class="alert alert-info">General TECH news</h3><br>
  <div class="row">
    <div class="col-sm-3">
    	<h6 class="panel-title"><?php echo $article_title;?></h6>
      <?php echo '<img src="assets/img/'.$image.'" class="img-responsive" width="200" alt="Image" id="images">';?>
      <p><?php echo $content;?>...<em style="font-style: italic;"></em></p>

      <small style="text-align: center; font-style: italic;"><?php echo $author;?>, <?php echo $date;?><?php echo '<a href="blog_detail.php?id='.$article_id.'"> read more...</a>';?></small>
    </div>

    <div class="col-sm-3">
    	<h6 class="panel-title">The school of it has commenced class</h6>
      <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
      <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
        <a href="" class="text-center">read more...</a>
    </div>
  </div>
</div>

<hr>

<div class="container">
  <h3 class="alert alert-info">Graphic Designing</h3><br>
  <div class="row">
   		 <div class="col-sm-3">
    	<h6 class="panel-title">The school of it has commenced class</h6>
      <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
      <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
    	<h6 class="panel-title">The school of it has commenced class</h6>
      <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
      <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
        <a href="" class="text-center">read more...</a>
    </div>
  </div>
</div>

<hr>

<div class="container">
  <h3 class="alert alert-info">Web Designing</h3><br>
  <div class="row">
   		 <div class="col-sm-3">
    	<h6 class="panel-title">The school of it has commenced class</h6>
      <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
      <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
    	<h6 class="panel-title">The school of it has commenced class</h6>
      <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
      <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
    </div>

    <div class="col-sm-3">
      <h6 class="panel-title">The school of it has commenced class</h6>
       <img src="assets/img/img_5.jpg" class="img-responsive" width="200" alt="Image" id="images">
        <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Hic ab iste temporibus voluptate minus officia sequi nemo, sit magni atque aliquam blanditiis, omnis explicabo magnam ipsam id, culpa aperiam corrupti.</p>
        <a href="" class="text-center">read more...</a>
    </div>
  </div>
</div>

</div>
<!-- including qoutes here -->
<?php 
  // included qoutes here also
  include('parts/quotes.php');
?>

<!-- footer of the page -->
<?php 
 // included footer here in the pagef
 include('include/footer.php');
?>

<style>
   
	.heading{
		margin-top: 30px;
		color: #0d1e2d;
		text-align: center;
	}

	em{
		color: #727272;
	}
</style>