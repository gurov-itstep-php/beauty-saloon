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
        <?php include('app/views/includes/header.php'); ?>
    </header>
        
    
        <!--Content -->
         <?php include($this->contentPath); ?> 

        <!-- Footer -->
        <?php include('app/views/includes/footer.php'); ?>

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

