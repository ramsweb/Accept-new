<?php
include 'config.php';
$sql = "SELECT posts.*,users.username FROM posts  inner join users on posts.user_id = users.id order by posts.id DESC limit 4 ";
$posts = array();
$result = mysqli_query($conn, $sql);
// fetch all posts as an associative array called $posts
while ($row = mysqli_fetch_assoc($result)) {
  $sql1 = "SELECT topics.* FROM post_topic  inner join topics on topics.id = post_topic.topic_id WHERE post_id = " . $row['id'] . "";
  $topic = mysqli_query($conn, $sql1);
  $topicresult = mysqli_fetch_assoc($topic);
  $row['topic'] = $topicresult['name'];
  array_push($posts, $row);
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
  <style>
    .playbutton {
      background-color: #4da6e7;
      border: medium none;
      color: #fff;
      display: block;
      font-size: 18px;
      margin: 0 auto;
      padding: 8px 16px;
      position: relative;
      top: 50%;
      cursor: pointer;
      z-index: 10;
    }

    .playbutton.active {
      background-color: #4da6e7;
    }

  </style>
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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Accept</h6>
                    <h2>Make the world accept you!!</h2>
                    <!-- <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p> -->
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="tel:0561024332"><i class="fa fa-phone"></i> Call Now</a>
                      <a href="quote.php"><i class="fa fa-envelope"></i> Get Quote</a>
                      <a href="https://iwtsp.com/971561024332"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/web.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/about-dec-v3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is <em>ACCEPT</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>We are a new-age digital agency working towards growth. We help startups, small businesses and large
                  companies develop better branding and more relevant digital marketing strategies and tactics to take
                  their business to the next level. </p>
                <div class="section-heading">
                  <h6>Growth of small business and startups</h6>
                </div>
                <p>Accept for Marketing Operation offers comprehensive digital marketing services for small business owners who are ready to expand their businesses to the public and increase their sales. </p>
                <div class="section-heading">
                  <h6>Home Business</h6>
                </div>
                <p>With the help of Accept for marketting operations, you can start your own business. Start an online business from home today with Accept for marketting operations and increase your income.</p>
                <div class="section-heading">
                  <h6>Low-Budget, High-Quality</h6>
                </div>
                <p>Quality of products is very important because of the higher competition in the market. If your products are not meeting the expectations of your customers then so soon you will be out of business.</p>
                <!-- <p><a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">Growth of small business and
                    startups</a> | <a href="https://templatemo.com/contact" target="_blank">Home Business</a> | <a
                    href="https://templatemo.com/contact" target="_blank">Low-Budget, High-Quality</a> </p> -->
                <!-- <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Photoshop</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Animation</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our ACCEPT <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        Graphic Design
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Social Media Marketting
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                        Photography 
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        Web Development
                      </div>
                    </div>
                    <div >
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Digital Marketing
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                         Videography
                      </div>
                    </div>
                   
                 
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Graphic Design</h4>
                                <p>At <em>Accept For Marketting Operations</em>, we provide high-quality graphic design
                                  for our clients.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Motion Graphics Design</span>
                                  <span><i class="fa fa-check"></i> Website Interface Design</span> <span><i class="fa fa-check"></i> Social Media Post Design</span>
                                  <span><i class="fa fa-check"></i> Business Identity Design</span>
                                </div>
                                <div class="border-first-button"><a href="graphic-design.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/graphic-design.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Social Media Marketting</h4>
                                <p>At <em>Accept For Marketting Operations</em>, we create a win-win situation for
                                  business enterprises by providing a prolific exposure of businesses in the online
                                  domains to real targeted customers.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Account Management</span>
                                  <span><i class="fa fa-check"></i> Campaigns</span>
                                </div>
                                <div class="border-first-button"><a href="social-media.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/social-media.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Photography</h4>
                                <p><em>Accept For Marketting Operations</em> offer cutting-edge visual service that
                                  actually helps to display your products and to increase the sale of the product.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Product Photography</span>
                                  <span><i class="fa fa-check"></i> Food Photography</span> <span><i class="fa fa-check"></i> Commercial Photography</span>
                                  
                                </div>
                                <div class="border-first-button"><a href="photography.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/multi-media.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Web Development</h4>
                                <p><em>Accept For Marketting Operations</em> is a one stop reliable and professional
                                  development company offering you precise solutions for all your web design and
                                  development needs in real time manner.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Website Management</span>
                                  <span><i class="fa fa-check"></i> Ecommerce Website</span> <span><i class="fa fa-check"></i> Mobile Application</span>
                                </div>
                                <div class="border-first-button"><a href="web-development.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                                  incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/web_development.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Digital Marketing</h4>
                                <p><em>Accept For Marketting Operations</em> help you move up the elusive ladder of
                                  SERPs through the use of SEO for higher ranking.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Search Engine
                                    Optimization</span>
                                  <span><i class="fa fa-check"></i> Campaigns</span> <span><i class="fa fa-check"></i>
                                    Content Management</span>
                                </div>
                                <div class="border-first-button"><a href="digital-marketing.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                                  incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/slider-dec-v3.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Videography</h4>
                                <p><em>Accept For Marketting Operations</em> provide video production services that include concept creation, video coverage and video editing services as a form of marketing your products, displaying new ads and informing your services to your potential clients.</p>
                                <div class="ticks-list">
                                    <span><i class="fa fa-check"></i> Promo Video</span> <span><i class="fa fa-check"></i>
                                    Highlight Video</span> <span><i class="fa fa-check"></i> Detail Video</span>
                                </div>
                                <div class="border-first-button"><a href="videography.php"> View More <i class="fa  fa-arrow-right"></i></a></div>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                                  incididunt.</p> -->
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/video.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="free-quote" class="free-quote" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <button class="playbutton active" id="play"><i class="fa fa-play fa-2x fa-white"></i></button>
          <video id="banner-video" preload="auto" style="width: 80%;margin-top:40px">
            <source src="assets/video/4K.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="fill-form">
        <div class="row">
          <!-- <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Get Your Free Quote</h6>
            <h4>Grow With Us Now</h4>
            <div class="line-dec"></div>
          </div>
        </div> -->
          <div class="col-lg-4">
            <div class="info-post">
              <div class="icon">
                <i class="fa fa-user fa-10x fa-white"></i>
                <h3 class="fa-white">$15 M</h3>
                <h4 class="fa-white">Micro-Projects</h4>
                <!-- <a href="#">010-020-0340</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-post">
              <div class="icon">
                <i class="fa fa-users fa-10x fa-white"></i>
                <h3 class="fa-white">$36 M</h3>
                <h4 class="fa-white">Productive Families</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-post">
              <div class="icon">
                <i class="fa fa-line-chart fa-10x fa-white"></i>
                <h3 class="fa-white">56%</h3>
                <h4 class="fa-white">Growth</h4>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <i class="fa fa-user fa-5x"></i>
          <i class="fa fa-users"></i>
          <i class="fa fa-line-chart"></i>
        
        </div> -->
        </div>
      </div>
    </div>
  </div>


  <!-- <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h4>See Our Recent <em>Projects</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/portfolio-01.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Website Builder</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/portfolio-01.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Website Builder</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/portfolio-02.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Website Builder</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/portfolio-03.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Website Builder</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/portfolio-04.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Website Builder</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="assets/images/blog/<?php echo $posts[0]['image']; ?>" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category"><?php echo $posts[0]['topic']; ?></span>
              <span class="date"><?php echo date('d F Y', strtotime($posts[0]['created_at'])); ?></span>
              <a href="#">
                <h4><?php echo $posts[0]['title']; ?></h4>
              </a>
              <p><?php echo substr(html_entity_decode($posts[0]['body']), 0, 50); ?></p>
              <span class="author"><img src="assets/images/author-post.jpg" alt="">By: <?php echo $posts[0]['username']; ?></span>
              <div class="border-first-button"><a href="blog.php">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[1]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category"><?php echo $posts[1]['topic']; ?></span>
                    <span class="date"><?php echo date('d F Y', strtotime($posts[1]['created_at'])); ?></span>
                    <a href="#">
                      <h4><?php echo $posts[1]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[1]['body']), 0, 50); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[2]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category"><?php echo $posts[2]['topic']; ?></span>
                    <span class="date"><?php echo date('d F Y', strtotime($posts[2]['created_at'])); ?></span>
                    <a href="#">
                      <h4><?php echo $posts[2]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[2]['body']), 0, 50); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[3]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category"><?php echo $posts[3]['topic']; ?></span>
                    <span class="date"><?php echo date('d F Y', strtotime($posts[3]['created_at'])); ?></span>
                    <a href="#">
                      <h4><?php echo $posts[3]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[3]['body']), 0, 50); ?></p>
                  </div>
                </div>
              </div>
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