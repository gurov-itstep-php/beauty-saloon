<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beauty-Saloon - <?=$title?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Beauty-Saloon Project">
    <meta name="author" content="coGurov">
    <link rel="stylesheet" href="<?=self::RES?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/style.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/responsive.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/base.css">
    <link rel="icon" href="<?=self::RES?>/images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3//css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="main-layout">
    <header>
        <?php include('app/views/includes/nav.php'); ?>
    </header>
        <?php include('app/views/includes/header.php'); ?>

            <!----------------Доработать-----контент!------------------->
            <!-- service -->
            <div id="service"  class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2> <img src="<?=self::RES?>/images/head.png" alt="#"/> Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div id="hover_chang" class="service_box">
                                <i><img src="<?=self::RES?>/images/thr.png" alt="#"/></i>
                                <h3>Cosmetic</h3>
                                <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="hover_chang" class="service_box">
                                <i><img src="<?=self::RES?>/images/thr1.png" alt="#"/></i>
                                <h3>nails</h3>
                                <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="hover_chang" class="service_box">
                                <i><img src="<?=self::RES?>/images/thr2.png" alt="#"/></i>
                                <h3>hairdressing</h3>
                                <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a class="read_more" href="#">Read More</a>
                        </div>
                        </div>
                    </div>
            </div>
            <!-- service -->

            <!-- about -->
            <div id="about"  class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="titlepage">
                                <h2> <img src="<?=self::RES?>/images/head.h.png" alt="#"/> About Our Labspa</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                                <a class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->

            <!-- customer -->
            <div id="customer" class="customer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2> <img src="<?=self::RES?>/images/head.png" alt="#"/> Our Customer Feedback</h2>
                            </div>
                        </div>
                    </div>
                    <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="test_box">
                                        <i><img src="<?=self::RES?>/images/tes.png" alt="#"/></i>
                                        <h4>Rohali jonson</h4>
                                        <span>customer</span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                                        <img src="<?=self::RES?>/images/icon.png" alt="#"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                    <div class="test_box">
                                        <i><img src="<?=self::RES?>/images/tes.png" alt="#"/></i>
                                        <h4>Rohali jonson</h4>
                                        <span>customer</span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                                        <img src="<?=self::RES?>/images/icon.png" alt="#"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                    <div class="test_box">
                                        <i><img src="<?=self::RES?>/images/tes.png" alt="#"/></i>
                                        <h4>Rohali jonson</h4>
                                        <span>customer</span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                                        <img src="<?=self::RES?>/images/icon.png" alt="#"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                    </div>
                </div>
            </div>
            <!-- end customer -->

            </div>

            <!--  contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2> <img src="<?=self::RES?>/images/head.h.png" alt="#"/> Request <span class="white"> A call Back</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form id="request" class="main_form">
                                <div class="row">
                                    <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Name" type="type" name="Name"> 
                                    </div>
                                    <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="type" name="Email"> 
                                    </div>
                                    <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                                    </div>
                                    <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                                    </div>
                                    <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <button class="send_btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact -->
            <!---------------------------------------------------------->

      <!-- Javascript files-->
      <script src="<?=self::RES?>/js/jquery.min.js"></script>
      <script src="<?=self::RES?>/js/popper.min.js"></script>
      <script src="<?=self::RES?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?=self::RES?>/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="<?=self::RES?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?=self::RES?>/js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = '<?=self::RES?>/images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

