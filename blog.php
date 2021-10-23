<?php
include 'config.php';
if (isset($_GET['topic'])) {
  $topicId  = $_GET['topic'];
}
$sql = "SELECT posts.*,users.username FROM posts  inner join users on posts.user_id = users.id order by posts.id DESC ";
$posts = array();
$result = mysqli_query($conn, $sql);
// fetch all posts as an associative array called $posts
while ($row = mysqli_fetch_assoc($result)) {
  $sql1 = "SELECT topics.* FROM post_topic  inner join topics on topics.id = post_topic.topic_id WHERE post_id = " . $row['id'] . "";
  $topic = mysqli_query($conn, $sql1);
  $topicresult = mysqli_fetch_assoc($topic);
  $row['topic'] = $topicresult['name'];
  if ($topicId > 0) {
    if ($topicresult['id'] == $topicId) {
      array_push($posts, $row);
    }
  } else {
    array_push($posts, $row);
  }
}
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
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
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
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo" style="background-color: #4da6e7; float:right">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav" style="float:left">
              <li class="scroll-to-section"><a href="index.php" class="active"> الرئيسية</a></li>
              <li class="scroll-to-section"><a href="index.php">من نحن</a></li>
              <li class="scroll-to-section"><a href="index.php">خدماتنا</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio">Projects</a></li> -->
              <li class="scroll-to-section"><a href="blog.php"> المدونة</a></li>
              <li class="scroll-to-section"><a href="#contact">تواصل معنا</a></li>
              <li class="scroll-to-section">
                <div class="border-first-button"><a href="English/index.php"><i class="fa fa-language"></i> EN</a></div>
              </li>
            </ul>
            <a class='menu-trigger' >
              <span >Menu</span>
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
          <div class="item">
                <div class="post-item">
                  <div class="right-content">
                    <a href="blog.php">
                      <span class="category">الجميع</span></a>
                  </div>
                  
                </div>
              </div>
            <?php for ($i = 0; $i < count($topics); $i++) {
            ?>
              <div class="item">
                <div class="post-item">
                  <div class="right-content">
                    <a href="blog.php?topic=<?php echo $topics[$i]['id']; ?>"><br>
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
  <div id="blog" class="blog" style="padding-top: 0;" dir="rtl">
    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < count($posts); $i++) {
        ?>
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="post-item">
                    <div class="thumb">
                      <a href="blogdetails.php?postId=<?php echo $posts[$i]['id']; ?>"><img src="assets/images/blog/<?php echo $posts[$i]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                    </div>
                    <div class="right-content">
                      <span class="category"><?php echo $posts[$i]['topic']; ?></span><br>
                      <span class="date"><?php echo date('d F Y', strtotime($posts[$i]['created_at'])); ?></span><br>
                      <a href="blogdetails.php?postId=<?php echo $posts[$i]['id']; ?>">
                        <h4><?php echo $posts[$i]['title']; ?></h4>
                      </a>
                      
                      <p><?php echo substr(html_entity_decode($posts[$i]['body']), 0, 150); ?></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        <?php  } ?>

      </div>
    </div>
  </div>

 <div id="contact" class="contact-us section">
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>اتصل بنا</h6>
            <h4>اتصل بنا <em>حاليا</em></h4>
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.1700998078077!2d54.352748814860504!3d24.479562484235075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s7HPPF9H3%2BRX!5e0!3m2!1sen!2sae!4v1634194837659!5m2!1sen!2sae" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="tel:+971561024332"> 561024332 971+</a>
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
                          <a href="#">برج الجزيرة ، الخالدية ، أبوظبي</a>
                        </div>
                      </div>
                    </div>
                    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="Name" id="Name" placeholder="اسم" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                          <input type="text" name="Phone" id="Phone" placeholder="رقم الهاتف" required="">
                        </fieldset>
                        <fieldset>
                          <input type="text" name="Email" id="Email" pattern="[^ @]*@[^ @]*" placeholder="بريد الالكتروني" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <textarea name="Message" type="text" class="form-control" id="Message" placeholder="رسالة" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="fcf-button" class="main-button ">أرسل الرسالة الآن</button>
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