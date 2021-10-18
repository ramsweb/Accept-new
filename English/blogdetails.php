<?php
include 'config.php';
$postId = $_GET['postId'];
$sql = "SELECT posts.*,users.username FROM posts  inner join users on posts.user_id = users.id where posts.id = $postId order by posts.id DESC ";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
$sql1 = "SELECT topics.* FROM post_topic  inner join topics on topics.id = post_topic.topic_id WHERE post_id = " . $post['id'] . "";
$topic = mysqli_query($conn, $sql1);
$topicresult = mysqli_fetch_assoc($topic);
$post['topic'] = $topicresult['name'];

$sql = "SELECT * FROM topics order by id DESC ";
$topics = array();
$result = mysqli_query($conn, $sql);
// fetch all posts as an associative array called $posts
while ($row = mysqli_fetch_assoc($result)) {
  array_push($topics, $row);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Accept For Marketting Operations</title>
  <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">-->
  <!--  <div class="preloader-inner">-->
  <!--    <span class="dot"></span>-->
  <!--    <div class="dots">-->
  <!--      <span></span>-->
  <!--      <span></span>-->
  <!--      <span></span>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="mailto:info@accept-m.com"><i class="fa fa-envelope"></i>info@accept-m.com</a></li>
            <li><a href="tel:0561024332"><i class="fa fa-phone"></i>0561024332</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="https://www.facebook.com/Accept4Marketing-101617275558064/"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="https://www.instagram.com/accept4marketing/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/accept-for-marketing-operations-58516b222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BPxp8HnQkQm2kI5hD5kbh0g%3D%3D"><i class="fa fa-linkedin"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo" style="background-color: #4da6e7;">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Our Services</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio">Projects</a></li> -->
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
              <li class="scroll-to-section">
                <div class="border-first-button"><a href="../index.php"><i class="fa fa-language"></i> AR</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="portfolio" class="our-portfolio section">
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <?php for ($i = 0; $i < count($topics); $i++) {
            ?>
              <div class="item">
                <div class="post-item">
                  <div class="right-content">
                    <a href="#">
                      <span class="category"><?php echo $topics[$i]['name']; ?></span>
                  </div>
                  </a>
                </div>
              </div>
            <?php  } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="blog" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
       
      <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="assets/images/blog/<?php echo $post['image']; ?>" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category"><?php echo $post['topic']; ?></span>
              <span class="date"><?php echo date('d F Y', strtotime($post['created_at'])); ?></span>
              <a href="#">
                <h4><?php echo $post['title']; ?></h4>
              </a>
              <p><?php echo html_entity_decode($post['body']); ?></p>
              <span class="author">By: <?php echo $post['username']; ?></span>
              <div class="border-first-button"><a href="blog.php">Back</a></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.3533715369417!2d54.34701951499524!3d24.47321018423808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e672ba2962a6b%3A0x4c6504696061593b!2sShining%20Towers!5e0!3m2!1sen!2sin!4v1634041066620!5m2!1sen!2sin" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="tel:+971561024332">+971 561024332</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="mailto:info@accept-m.com">info@accept-m.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="https://goo.gl/maps/yG9RTMwadXQc56MN7">Accept, Khalidhiya, AbuDhabi</a>
                        </div>
                      </div>
                    </div>
                    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="Name" id="Name" placeholder="Name" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                          <input type="text" name="Phone" id="Phone" placeholder="Your Phone" required="">
                        </fieldset>
                        <fieldset>
                          <input type="text" name="Email" id="Email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                        </fieldset>

                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <textarea name="Message" type="text" class="form-control" id="Message" placeholder="Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                        </fieldset>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 Accept. All Rights Reserved.
            <!-- <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a> -->
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    $(document).ready(function() {
      var ctrlVideo = document.getElementById("banner-video");

      $('#play').click(function() {
        if ($('#play').hasClass("active")) {

          ctrlVideo.play();

          $('#play').html("<i class='fa fa-pause fa-5x fa-white playbutton active'></i>");
          $('#play').hide();
          // $('#play').toggleClass("active");
        }
        // else {

        //   ctrlVideo.pause();

        //   $('#play').html("<i class='fa fa-play fa-5x fa-white playbutton active'></i>");
        //   $('#play').toggleClass("active");
        // }
      });

    });
  </script>
</body>

</html>