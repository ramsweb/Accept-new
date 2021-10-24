<?php
include 'config.php';
$sql = "SELECT posts.*,users.username FROM posts  inner join users on posts.user_id = users.id order by posts.id DESC limit 4 ";
$posts = array();
$result = mysqli_query($conn, $sql);
// fetch all posts as an associative array called $posts
while ($row = mysqli_fetch_assoc($result)) {
  $sql1 = "SELECT topics.* FROM post_topic  inner join topics on topics.id = post_topic.topic_id WHERE post_id = ".$row['id']."";
  $topic = mysqli_query($conn, $sql1);
  $topicresult = mysqli_fetch_assoc($topic);
  $row['topic'] = $topicresult['name'];
  array_push($posts,$row);
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

<body >

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
              <li class="scroll-to-section"><a href="#top" class="active"> الرئيسية</a></li>
              <li class="scroll-to-section"><a href="#about">من نحن</a></li>
              <li class="scroll-to-section"><a href="#services">خدماتنا</a></li>
              <!-- <li class="scroll-to-section"><a href="#portfolio">Projects</a></li> -->
              <li class="scroll-to-section"><a href="#blog"> المدونة</a></li>
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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>أكسبت</h6>
                    <h2>إجعل العالم يوافق عليك  <i class="fa fa-check" style="color:#4da6e7;"></i></h2>
                    <!-- <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p> -->
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="tel:0561024332"><i class="fa fa-phone"></i> اتصل الأن</a>
                      <a href="quote.php"><i class="fa fa-envelope"></i> أطلب السعر الأن</a>
                      <a href="https://iwtsp.com/971561024332"><i class="fa fa-whatsapp"></i> راسلنا واتساب</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="assets/images/banner.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <br><br>
                <img src="assets/images/about-dec-v3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>من نحن</h6>
                  <h4> ما هي  <em>أكسبت  </em> </h4>
                  <div class="line-dec"></div>
                </div>
                <p> نحن وكالة رقمية حديثة تعمل من أجل النمو، نعمل على مساعدة الشركات الناشئة والصغيرة والكبيرة في تطوير علاماتهم التجارية بشكل أفضل وذلك من خلال استراتيجيات وتكتيكات تسويق رقمية أكثر ملائمة تنقل أعمالهم إلى المستوى الاعلى   </p>
                <div class="section-heading">
                  <h6>تنمية الأعمال الصغيرة والشركات الناشئة </h6>
                </div>
                <p>تقدم شركة أكسبت خدمات تسويق رقمية شاملة لأصحاب الأعمال الصغيرة المستعدين لتوسيع أعمالهم للجمهور مما يساهم في زيادة مبيعاتهم. </p>
                <div class="section-heading">
                  <h6> الأعمال المنزلية </h6>
                </div>
                <p> بمساعدة أكسبت للعمليات التسويقية ، يمكنك بدء عملك الخاص... ابدأ مشروعًا تجاريًا عبر الإنترنت من المنزل اليوم مع أكسبت للعمليات التسويقية  ابدأ في زيادة دخلك
 </p>
                <div class="section-heading">
                  <h6>اسعار معقولة لجودة مبهرة</h6>
                </div>
                <p>جودة الخدمات مهمة للغاية بسبب المنافسة العالية في السوق، إذا كانت منتجاتك لا تلبي توقعات عملائك ، فحينئذٍ ستتوقف عن العمل قريبًا.</p>
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
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>خدماتنا</h6>
            <h4>ماذا تقدم <em>اكسبت</em></h4>
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
                        تصميم الجرافيك
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                       إدارة حسابات التواصل الاجتماعي
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                      تصوير المنتج
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        تطوير وتصميم المواقع الإلكترونية
                      </div>
                    </div>
                    <div class="thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        التسويق الرقمي
                      </div>
                    </div>
                    <div>
                      <div class="last-thumb">
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                        التصوير بالفيديو
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
                                <h4>تصميم الجرافيك   </h4>
                                <p>في  <em>أكسبت للعمليات التسويقية</em>، نحن نقدم تصميم رسومي عالي الجودة لعملائنا.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> موشن جرافيك ديزاين</span><br>
                                  <span><i class="fa fa-check"></i> تصميم واجهة الويب</span> <br><span><i class="fa fa-check"></i> تصميم مواقع التواصل الاجتماعي  </span><br>
                                  <span><i class="fa fa-check"></i> تصميم الهوية التجارية</span>
                                </div>
                                <div class="border-first-button"><a href="graphic-design.php"> عرض المزيد  <i class="fa  fa-arrow-left"></i></a></div>
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
                                <h4>إدارة حسابات التواصل الاجتماعي</h4>
                                <p>في <em>أكسبت للعمليات التسويقية</em>، نحن نخلق بينكم وبين عملائكم روح الثقه المتبادله حيث نسعى دوما ان تكون إدارة مواقع التواصل الإجتماعي بأسلوب و بطريقة تناسب نشاطكم التجاري.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i>   إدارة الحسابات</span><br>
                                  <span><i class="fa fa-check"></i> الحملات</span>
                                </div>
                                <div class="border-first-button"><a href="social-media.php"> عرض المزيد <i class="fa  fa-arrow-left"></i></a></div>
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
                                <h4>التصوير</h4>
                                <p><em>أكسبت للعمليات التسويقية</em> تقدم خدمة التصوير السينمائي الإحترافي حيث تساعد بالفعل على عرض منتجاتك وزيادة بيع المنتج.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> تصوير المنتج  </span><br>
                                  <span><i class="fa fa-check"></i> تصوير الطعام  </span>
                                  
                                </div>
                                <div class="border-first-button"><a href="photography.php"> عرض المزيد<i class="fa  fa-arrow-left"></i></a></div>
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
                                <h4>تطوير الشبكة</h4>
                                <p><em>أكسبت للعمليات التسويقية</em>هي شركة تطوير احترافية وموثوقة  تقدم لك حلولاً دقيقة لجميع احتياجات تصميم وتطوير الويب الخاصة بك في الوقت الفعلي.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i>  إدارة الموقع  </span><br>
                                  <span><i class="fa fa-check"></i>  موقع التجارة الإلكترونية  </span> <br><span><i class="fa fa-check"></i> تطبيق الهاتف المحمول  </span>
                                </div>
                                <div class="border-first-button"><a href="web-development.php"> عرض المزيد <i class="fa  fa-arrow-left"></i></a></div>
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
                                <h4>التسويق الرقمي</h4>
                                <p><em>أكسبت للعمليات التسويقية</em> تساعدك على الارتقاء من خلال استخدام مُحسنات محركات البحث للحصول على ترتيب أعلى ومساعدتك في الوصول لأعلى معايير التنافسية.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> تحسين محركات البحث</span><br>
                                  <span><i class="fa fa-check"></i>
                                    ادارة المحتوى</span>
                                </div>
                                <div class="border-first-button"><a href="digital-marketing.php"> عرض المزيد <i class="fa  fa-arrow-left"></i></a></div>
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
                                <h4>التصوير بالفيديو</h4>
                                <p><em>أكسبت للعمليات التسويقية</em> تقدم خدمات إنتاج الفيديو التي تشمل إنشاء المفاهيم وتغطية الفيديو وخدمات تحرير الفيديو كشكل من أشكال تسويق منتجاتك وعرض إعلانات جديدة وإبلاغ خدماتك لعملائك المحتملين</p>
                                <div class="ticks-list">
                                    <span><i class="fa fa-check"></i> فيديو ترويجي</span><br> <span><i class="fa fa-check"></i>
                                    تمييز الفيديو</span> <br><span><i class="fa fa-check"></i>تفاصيل الفيديو</span>
                                </div>
                                <div class="border-first-button"><a href="videography.php"> عرض المزيد <i class="fa  fa-arrow-left"></i></a></div>
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


  <div id="free-quote" class="free-quote">
    <div class="container" dir="rtl">
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
                <h4 class="fa-white">المشاريع الصغيرة</h4>
                <!-- <a href="#">010-020-0340</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-post">
              <div class="icon">
                <i class="fa fa-users fa-10x fa-white"></i>
                <h3 class="fa-white">$36 M</h3>
                <h4 class="fa-white">عائلات منتجة</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-post">
              <div class="icon">
                <i class="fa fa-line-chart fa-10x fa-white"></i>
                <h3 class="fa-white">56%</h3>
                <h4 class="fa-white">نمو</h4>
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
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h6>أخبار حديثة</h6>
            <h4>تحقق من مدونتنا <em>دعامات</em></h4>
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
              <span class="date" style="float: left;"><?php echo date('d F Y', strtotime($posts[0]['created_at'])); ?></span>
              <a href="#">
                <h4><?php echo $posts[0]['title']; ?></h4>
              </a>
              <p><?php echo substr(html_entity_decode($posts[1]['body']), 0, 200); ?></p>
              <span class="author" style="text-align: right;"><img src="assets/images/logo-Accept.png" alt="">  بواسطة  :  أكسبت  </span>

              <div class="border-first-button" style="float: left;"><a href="blog.php">إكتشف أكثر</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[1]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category" style="float: left;"><?php echo $posts[1]['topic']; ?></span><br>
                    <span class="date" ><?php echo date('d F Y', strtotime($posts[1]['created_at'])); ?></span><br>
                    <a href="#">
                      <h4><?php echo $posts[1]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[1]['body']), 0, 150); ?></p>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[2]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category" style="float:left;"><?php echo $posts[2]['topic']; ?></span><br>
                    <span class="date"><?php echo date('d F Y', strtotime($posts[2]['created_at'])); ?></span><br>
                    <a href="#">
                      <h4><?php echo $posts[2]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[2]['body']), 0, 150); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog/<?php echo $posts[3]['image']; ?>" style="height:230px; width:230px;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category" style="float: left;"><?php echo $posts[3]['topic']; ?></span><br>
                    <span class="date"><?php echo date('d F Y', strtotime($posts[3]['created_at'])); ?></span><br>
                    <a href="#">
                      <h4><?php echo $posts[3]['title']; ?></h4>
                    </a>
                    <p><?php echo substr(html_entity_decode($posts[3]['body']), 0, 150); ?></p>
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
    <div class="container" dir="rtl">
      <div class="row">
        <div class="col-lg-12 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>اتصل بنا</h6>
            <h4>اتصل بنا <em>حاليا</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
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